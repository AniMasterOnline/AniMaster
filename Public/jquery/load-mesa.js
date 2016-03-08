$(document).ready(function(){
    //console.log(jsonPartida);
    //console.log(Object.keys(jsonPartida).length);
    console.log(jsonPartida);
    $( ".input-partida-bottom" ).prop( "disabled", true );
    $( ".input-partida" ).prop( "disabled", true );
    
    if(Object.keys(jsonPartida).length != 0){
        var $value;
        for ($value = 0; $value < Object.keys(jsonPartida).length; $value++){
            var txt = $('#selpart').html();
            $('#selpart').html(txt + '<option value="'+$value+'">'+jsonPartida[$value].titol+'</option>');
            //console.log($value, jsonPartida[$value].id_partida, jsonPartida[$value].titol);
        }
        $value = $value - Object.keys(jsonPartida).length;
        Temp_ID = jsonPartida[$value].id_partida;
        $("#id_partida").val(jsonPartida[$value].id_partida);
        $("#titol").val(jsonPartida[$value].titol);
        $("#descripcio").val(jsonPartida[$value].descripcio);
        $("#any_partida").val(jsonPartida[$value].any_partida);
        $("#nivel_sobrenatural").val(jsonPartida[$value].nivel_sobrenatural);
        $("#disabled-joc").val(jsonPartida[$value].joc);
    }else if(Object.keys(jsonPartida).length == 0){
        $(location).attr('href', 'panel.php');
    }
    
    $("#selpart").change(function() {
        var $this = $(this),
        $value = $this.val();
        var selected = $("#selpart option:selected" ).text();
        Temp_ID = jsonPartida[$value].id_partida;
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
        
        var parametros = {
                "TempIdPartida" : Temp_ID
        };
        $.ajax({
                data:  parametros,
                url:   'System/MesaProtocols/JsonEnemigos.php',
                type:  'post',
                beforeSend: function () {
                },
                success:  function (response) {
                        jsonEnemigo = JSON.parse(response);
                        console.log(jsonEnemigo);
                        if(Object.keys(jsonEnemigo).length != 0){
                            var $value;
                            for ($value = 0; $value < Object.keys(jsonEnemigo).length; $value++){
                                var txt = $('#selEnemigo').html();
                                $('#selEnemigo').html(txt + '<option value="'+$value+'">'+jsonEnemigo[$value].nom+'</option>');
                                //console.log($value, jsonPartida[$value].id_partida, jsonPartida[$value].titol);
                            }
                        }else if(Object.keys(jsonEnemigo).length == 0){
                            alert("En el panell pots crear i gestionar els teus Enemics");
                        }
                }
        });
        $.ajax({
                data:  parametros,
                url:   'System/MesaProtocols/JsonItems.php',
                type:  'post',
                beforeSend: function () {
                },
                success:  function (response) {
                        jsonItem = JSON.parse(response);
                        console.log(jsonItem);
                        if(Object.keys(jsonItem).length != 0){
                            var $value;
                            for ($value = 0; $value < Object.keys(jsonItem).length; $value++){
                                var txt = $('#selItem').html();
                                $('#selItem').html(txt + '<option value="'+$value+'">'+jsonItem[$value].nom+'</option>');
                                //console.log($value, jsonPartida[$value].id_partida, jsonPartida[$value].titol);
                            }
                        }else if(Object.keys(jsonItem).length == 0){
                            alert("En el panell pots crear i gestionar els teus Items");
                        }
                }
        });
        $.ajax({
                data:  parametros,
                url:   'System/MesaProtocols/JsonPlayers.php',
                type:  'post',
                beforeSend: function () {
                },
                success:  function (response) {
                        jsonPlayer = JSON.parse(response);
                        console.log(jsonPlayer);
                        if(Object.keys(jsonPlayer).length != 0){
                            var $value;
                            for ($value = 0; $value < Object.keys(jsonPlayer).length; $value++){
                                var txt = $('#selPlayer').html();
                                $('#selPlayer').html(txt + '<option value="'+$value+'">'+jsonPlayer[$value].nom+'</option>');
                                //console.log($value, jsonPartida[$value].id_partida, jsonPartida[$value].titol);
                            }
                        }else if(Object.keys(jsonPlayer).length == 0){
                            alert("En el panell pots crear i gestionar els teus Npc's");
                        }
                }
        });
        
    });
});



