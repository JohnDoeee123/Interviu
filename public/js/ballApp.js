var ballApp = {
    logicModule: null,
    uiModule: null
};

$(document).ready(function() {
    $("#generateMatrix").click(function() {
        var ballNo = $('#ballNo').val();

        if (ballNo < 2 || ballNo > 10) {
            alert("Trebuie furnizat un nr intre 2 si 10");
            return;
        }

        ballApp.logicModule.setNoOfColors(ballNo);

        var randomMatrix = ballApp.logicModule.generateRandomBallMatrix();
        var solutionMatrix = ballApp.logicModule.getSolutionMatrix();
        var displayRandomMatrix = ballApp.uiModule.displayMatrix(randomMatrix);
        var displaySolutionMatrix = ballApp.uiModule.displayMatrix(solutionMatrix);

        $('#insertMatrix').empty().html(displayRandomMatrix);
        $('#insertResultMatrix').empty().html(displaySolutionMatrix);
        $('.showMe').show();

        $('#random_matrix').val(randomMatrix);
        $('#reordered_matrix').val(solutionMatrix);
    });
});