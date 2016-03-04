$(document).ready(function(){
    //console.log(jsonPartida);
    //console.log(Object.keys(jsonPartida).length);
    console.log(jsonPartida);
    $( ".input-partida-bottom" ).prop( "disabled", true );
    $( ".input-partida" ).prop( "disabled", true ); 
    $("#selpart").change(function() {
        var $this = $(this),
        $value = $this.val();
        var selected = $("#selpart option:selected" ).text();
        console.log($value, selected);
        $("#id_partida").val(jsonPartida[$value].id_partida);
        $("#titol").val(jsonPartida[$value].titol);
        $("#descripcio").val(jsonPartida[$value].descripcio);
        $("#any_partida").val(jsonPartida[$value].any_partida);
        $("#nivel_sobrenatural").val(jsonPartida[$value].nivel_sobrenatural);
        $("#disabled-joc").val(jsonPartida[$value].joc);
    });
    $("#selPartida").click(function() {
        var selectedEffect = "fade";
        $("#contenidor-partida").hide(selectedEffect,500);
    });
});



