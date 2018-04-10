 ballApp.uiModule = function() {
     var colorMappings = ['white', 'silver', 'red', 'grey', 'yellow', 'lime', 'blue', 'fuchsia', 'green', 'aqua'];

     function displayMatrix(matrix) {
         var matrixHtml = "<div class=\"appMatrix\">";

         matrix.forEach(function(el) {
             matrixHtml += generateRow(el);
         });

         matrixHtml += "</div>";

         return matrixHtml;
     };

     function generateRow(matrixRow) {
         var rowHtmlString = "<div class=\"row\"><div class=\"class-sm-12\">";

         matrixRow.forEach(function(el) {
             rowHtmlString += "<button style=\"background-color:" + colorMappings[el] + "\" class=\"showDigit\">" + el + "</button>"
         });

         rowHtmlString += "</div></div>";

         return rowHtmlString;
     };

     return {
         displayMatrix: displayMatrix
     };
 }()