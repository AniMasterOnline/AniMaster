$(document).ready(function(){
    /*Toggles dels ulls i de les fitxes*/
    var selectedEffect = "fade";
    
    $("#form-add-partida").show(selectedEffect, 500);
    $("#add-partida").addClass("button-active");
    
    $("#monstres").click(function(){
        $("#taulamonstres").show(selectedEffect, 500);
        $("#monstres").removeClass("button-active");
        $("#monstres").addClass("button-active");
        
        $("#taulaobjectes").hide();
        $("#objectes").removeClass("button-active");
        $("#taulaplayers").hide();
        $("#players").removeClass("button-active");
    });
    
});


