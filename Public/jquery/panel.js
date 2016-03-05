var selectedEffect = "fade";
$(document).ready(function(){
    /*Toggles dels ulls i de les fitxes*/
    //$("#partida-0").show(selectedEffect, 500);
    $("#partida-0").show(selectedEffect, 500);
    $("#partida0").addClass("button-active");
    
    $( "#accordion" ).accordion();
   
});
function mostrar(btp){
    var id = btp.value;
    $("button").removeClass("button-active");
    $('#partida'+id).addClass("button-active");
    $('.content-panel-partida').hide();
    $('#partida-'+id).show(selectedEffect, 500);
    $('#Enemic-'+id).show(selectedEffect, 500);
}
function desEnemic(btp){
    var id = btp.value;
    $('.content-panel-partida-content').hide();
    $('#Enemic-'+id).show(selectedEffect, 500);
}
function desNpc(btp){
    var id = btp.value;
    $('.content-panel-partida-content').hide();
    $('#Npc-'+id).show(selectedEffect, 500);
}
function desItem(btp){
    var id = btp.value;
    $('.content-panel-partida-content').hide();
    $('#Item-'+id).show(selectedEffect, 500);
}