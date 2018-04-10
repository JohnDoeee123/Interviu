 ballApp.logicModule = function() {
     var noOfColors = 2;
     var ballMatrix = [];
     var colorDistribution = [];
     var distributionClone;
     var resultMatrix = [];

     function setNoOfColors(colors) {
         noOfColors = colors;
     }

     function generateRandomBallMatrix() {
         resetMatrix();
         initColorDistribution();

         for (var i = 0; i < noOfColors; i++) {
             var currRow = generateRandomBallRow();
             ballMatrix.push(currRow);
         }

         if (!isMatrixValid()) {
             ballMatrix = generateRandomBallMatrix();
         }

         return ballMatrix;
     }

     function generateRandomBallRow() {
         var currRow = [];
         for (var i = 0; i < noOfColors; i++) {
             var currColor = Math.floor(Math.random() * noOfColors);
             currRow.push(currColor);
             colorDistribution[currColor] += 1;
         }

         return currRow;
     }

     function generateZeroFilledArray(noOfElements) {
         var currRow = [];
         for (var i = 0; i < noOfElements; i++) {
             currRow.push(0);
         }

         return currRow;
     }

     //this check is made in order to ensure that the matrix  has at least one element
     //of each color
     function isMatrixValid() {
         return colorDistribution.length !== 0 && colorDistribution.indexOf(0) === -1;
     }

     function initColorDistribution() {
         for (var i = 0; i < noOfColors; i++) {
             colorDistribution[i] = 0;
         }
     }

     function resetMatrix() {
         ballMatrix = [];
         colorDistribution = [];
         resultMatrix = [];
     }

     function getHighestDistribution() {
         var result = new colorDistributionObj(0, 0);

         distributionClone.forEach(function(val, idx) {
             if (val > result.val) {
                 result.val = val;
                 result.idx = idx
             }
         });

         return result;
     }

     function getLowestNonZeroDistribution() {
         var result = new colorDistributionObj(null, 0);

         distributionClone.forEach(function(val, idx) {
             if (val == 0) return;
             if (val < result.val || result.val == null) {
                 result.val = val;
                 result.idx = idx
             }
         });

         return result;
     }

     function getSolutionMatrix() {
         distributionClone = colorDistribution.slice(0);
         var response = [];

         for (var i = 0; i < noOfColors; i++) {
             var high = getHighestDistribution(distributionClone);
             var low = getLowestNonZeroDistribution(distributionClone);
             var currRow = generateZeroFilledArray(noOfColors);;

             if (low.val < noOfColors) {
                 currRow.fill(low.idx, 0, low.val);
                 currRow.fill(high.idx, low.val, noOfColors);
                 distributionClone[high.idx] -= noOfColors - low.val;
                 distributionClone[low.idx] = 0;

             } else {
                 currRow.fill(low.idx, 0, noOfColors);
                 distributionClone[low.idx] -= noOfColors;
             }
             response.push(currRow);
         }

         return response;
     }

     function colorDistributionObj(val, idx) {
         this.val = val;
         this.idx = idx;
     };

     return {
         setNoOfColors: setNoOfColors,
         generateRandomBallMatrix: generateRandomBallMatrix,
         getSolutionMatrix: getSolutionMatrix
     };
 }();