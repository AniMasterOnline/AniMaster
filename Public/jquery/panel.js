$(document).ready(function(){
    /*Toggles dels ulls i de les fitxes*/
    $("#taulamonstres").toggle(500);
    $("#monstres").click(function(){
        $("#taulamonstres").toggle(500);
        $("#taulaobjectes").hide();
        $("#taulaplayers").hide();
    });
    $("#objectes").click(function(){
        $("#taulaobjectes").toggle(500);
        $("#taulamonstres").hide();
        $("#taulaplayers").hide();
    });
    $("#players").click(function(){
        $("#taulaplayers").toggle(500);
        $("#taulamonstres").hide();
        $("#taulaobjectes").hide();
    });
    
});


