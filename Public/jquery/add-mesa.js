$(document).ready(function(){
    var cont1 = 0;
    $("#add-monster").click(function(){
        //Per a saber quin monstre cargar
        var $value = $("#selEnemigo").val();
        //Variables del enemic
        var monster = jsonEnemigo[$value].nom;
        var imglink = "";
        var vida = jsonEnemigo[$value].vida;
        var armadura = jsonEnemigo[$value].armadura;
        var turno = jsonEnemigo[$value].turno;
        var arma = jsonEnemigo[$value].arma;
        var atq = jsonEnemigo[$value].ataque;
        var def = jsonEnemigo[$value].defensa;
        var pod = jsonEnemigo[$value].poderes;
        //Control de la variable per a poder eliminar
        cont1++;
        var del = "mob"+cont1;
        /*Generem el contingut que imprimirem*/
        var newmonster = ' \n\
                <div id="'+del+'" class="dalt">\n\
                    <div class="titlefitxa">'+monster+'</div>\n\
                    <div class="imgfitxa"><img src="'+imglink+'"/></div>\n\
                    <div class="txtfitxa">\n\
                        <div class="row-top">\n\
                            <div class="column1">Vida</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+vida+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">H.Ataque</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+atq+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">Arma</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+arma+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">H.Defensa</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+def+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">Armadura</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+armadura+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">Turno</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+turno+'</div>\n\
                        </div>\n\
                        <div class="row-bottom">\n\
                            <div class="column1">Poderes</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+pod+'</div>\n\
                        </div>\n\
                    </div>\n\
                    <button value="'+$value+'" class="modfitxa" disabled >&nbsp;</button>\n\
                    <button  value="'+del+'" onclick="deleete(this);" class="delfitxa">-</button>\n\
                </div>\n\
            ';
        /*Imprimim el div*/
        var content = $("#todo-monster").html();
        $("#todo-monster").html(content+" "+newmonster);
    });
    
    var cont2 = 0;
    $("#add-player").click(function(){
        //Per a saber quin Player cargar
        var $value = $("#selPlayer").val();
        //Variables del Player
        var npc = jsonPlayer[$value].nom;
        var imglink = "";
        var vida = jsonPlayer[$value].vida;
        var armadura = jsonPlayer[$value].armadura;
        var turno = jsonPlayer[$value].turno;
        var arma = jsonPlayer[$value].arma;
        var atq = jsonPlayer[$value].ataque;
        var def = jsonPlayer[$value].defensa;
        var pod = jsonPlayer[$value].poderes;
        //Control de la variable per a poder eliminar
        cont2++;
        var del = "npc"+cont2;
        
        /*Generem el contingut que imprimirem*/
        var newnpc = ' \n\
                <div id="'+del+'" class="dalt">\n\
                    <div class="titlefitxa">'+npc+'</div>\n\
                    <div class="imgfitxa">'+imglink+'</div>\n\
                    <div class="txtfitxa">\n\
                        <div class="row-top">\n\
                            <div class="column1">Vida</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+vida+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">H.Ataque</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+atq+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">Arma</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+arma+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">H.Defensa</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+def+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">Armadura</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+armadura+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">Turno</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+turno+'</div>\n\
                        </div>\n\
                        <div class="row-bottom">\n\
                            <div class="column1">Poderes</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+pod+'</div>\n\
                        </div>\n\
                    </div>\n\
                    <button value="'+$value+'" class="modfitxa" disabled >&nbsp;</button>\n\
                    <button  value="'+del+'" onclick="deleete(this);" class="delfitxa">-</button>\n\
                </div>\n\
            ';
        /*Imprimim el div*/
        var content = $("#todo-player").html();
        $("#todo-player").html(content+" "+newnpc);
    });
    
    var cont3 = 0;
    $("#add-item").click(function(){
        //Per a saber quin Player cargar
        var $value = $("#selItem").val();
        //Variables del Item
        var item = jsonItem[$value].nom;
        var imglink = "";
        var description = jsonItem[$value].descripcio;
        //Control de la variable per a poder eliminar
        cont3++;
        var del = "item"+cont3;
        
        /*Generem el contingut que imprimirem*/
        var newitem = ' \n\
                <div id="'+del+'" class="dalt">\n\
                    <div class="titlefitxa">'+item+'</div>\n\
                    <div class="imgfitxa">'+imglink+'</div>\n\
                    <div class="txtfitxa">\n\
                        <div class="row-top">\n\
                                <div class="column1">Descripció</div>\n\
                            </div>\n\
                            <div class="row-bottom">\n\
                                <div class="column3">'+description+'</div>\n\
                            </div>\n\
                    </div>\n\
                    <button value="'+$value+'" class="modfitxa" disabled >&nbsp;</button>\n\
                    <button  value="'+del+'" onclick="deleete(this);" class="delfitxa">-</button>\n\
                </div>\n\
            ';
        /*Imprimim el div*/
        var content = $("#todo-item").html();
        $("#todo-item").html(content+" "+newitem);
    });
});
function deleete(del){
    var bye = del.value;
    $('#'+bye).remove();
}