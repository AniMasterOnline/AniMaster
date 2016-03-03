var selectedEffect = "fade";
$(document).ready(function(){
    /*Toggles dels ulls i de les fitxes*/
    $("#partida-0").show(selectedEffect, 500);
    $("#partida0").addClass("button-active");
});
function mostrar(btp){
        var id = btp.value;
        $("button").removeClass("button-active");
        $('#partida'+id).addClass("button-active");
        $('.content-panel-partida').hide();
        $('#partida-'+id).show(selectedEffect, 500);
    }