$(document).ready(function(){
    /*Toggles dels ulls i de les fitxes*/
    var selectedEffect = "fade";
    
    $("#taulamonstres").show(selectedEffect, 500);
    $("#monstres").addClass("button-active");
    
    $("#monstres").click(function(){
            $( "#dialog-confirm" ).dialog({
              resizable: false,
              height:140,
              modal: true,
              buttons: {
                "Delete all items": function() {
                  $( this ).dialog( "close" );
                },
                Cancel: function() {
                  $( this ).dialog( "close" );
                }
              }
            });
        $("#taulamonstres").show(selectedEffect, 500);
        $("#monstres").removeClass("button-active");
        $("#monstres").addClass("button-active");
        
        $("#taulaobjectes").hide();
        $("#objectes").removeClass("button-active");
        $("#taulaplayers").hide();
        $("#players").removeClass("button-active");
    });
    
    $("#objectes").click(function(){
        $("#taulaobjectes").show(selectedEffect, 500);
        $("#objectes").removeClass("button-active");
        $("#objectes").addClass("button-active");
        
        $("#taulamonstres").hide();
        $("#monstres").removeClass("button-active");
        $("#taulaplayers").hide();
        $("#players").removeClass("button-active");
    });
    
    $("#players").click(function(){
        $("#taulaplayers").show(selectedEffect, 500);
        $("#players").removeClass("button-active");
        $("#players").addClass("button-active");
        
        $("#taulamonstres").hide();
        $("#monstres").removeClass("button-active");
        $("#taulaobjectes").hide();
        $("#objectes").removeClass("button-active");
    });
    
});


