$(document).ready(function(){
    //console.log(jsonPartida);
    //console.log(Object.keys(jsonPartida).length);
    
     $("#selpart").change(function() {
        var $this = $(this),
        $value = $this.val();
        var selected = $("#selpart option:selected" ).text();
        console.log(selected);
        $("#descripcio").val(jsonPartida[$value].descripcio);
        $("#any_partida").val(jsonPartida[$value].any_partida);
        $("#nivel_sobrenatural").val(jsonPartida[$value].nivel_sobrenatural);
        $("#disabled-joc").val(jsonPartida[$value].joc);
    });
});



