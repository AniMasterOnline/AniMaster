$(document).ready(function(){
    /*Toggles dels ulls i de les fitxes*/
    $("#eyemonst").click(function(){
        $("#taulmonst").toggle(500);
    });
    $("#eyepj").click(function(){
        $("#taulpj").toggle(500);
    });
    $("#eyeobj").click(function(){
        $("#taulobj").toggle(500);
    });
    
    $("#sidebar-toggle").click(function(){
        var mpanelbox = $('#mpanel-box').attr('class');
        var mesamultimedia = $('#mesa-multimedia').attr('class');
        var mesacontent = $('#mesa-content').attr('class');
        
        if (mpanelbox == "mpanel-box-open"){
            $("#mpanel-box").removeClass("mpanel-box-open");
            $("#mpanel-box").addClass("mpanel-box-closed");
        }else{
            $("#mpanel-box").removeClass("mpanel-box-closed");
            $("#mpanel-box").addClass("mpanel-box-open");
        }
        if (mesamultimedia == "mesa-multimedia-open"){
           $("#mesa-multimedia").removeClass("mesa-multimedia-open");
            $("#mesa-multimedia").addClass("mesa-multimedia-closed");
        }else{
            $("#mesa-multimedia").removeClass("mesa-multimedia-closed");
            $("#mesa-multimedia").addClass("mesa-multimedia-open");
        }
        if (mesacontent == "mesa-content-open"){
           $("#mesa-content").removeClass("mesa-content-open");
            $("#mesa-content").addClass("mesa-content-closed");
        }else{
            $("#mesa-content").removeClass("mesa-content-closed");
            $("#mesa-content").addClass("mesa-content-open");
        }
    });
    var cont1 = 0;
    $("#add-monster").click(function(){
        /*Variables per a poder controlar el div internament*/
        cont1++;
        var del = "mob"+cont1;
        
        /*Variables del enemic*/
        var monster = "Test";
        var imglink = "";
        var vida = "0";
        var ta = "0";
        var turn = "0";
        var damage = "0";
        var atq = "0";
        var def = "0";
        var pod = "n/a";
        
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
                            <div class="column1">TA</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+ta+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">Turno</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+turn+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">Daño</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+damage+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">Ataque</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+atq+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">Defensa</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+def+'</div>\n\
                        </div>\n\
                        <div class="row-bottom">\n\
                            <div class="column1">Poderes</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+pod+'</div>\n\
                        </div>\n\
                    </div>\n\
                    <button value="'+del+'" class="modfitxa">Modifica!</button>\n\
                    <button  value="'+del+'" onclick="deleete(this);" class="delfitxa">-</button>\n\
                </div>\n\
            ';
        /*Imprimim el div*/
        var content = $("#todo-monster").html();
        $("#todo-monster").html(content+" "+newmonster);
    });
    
    var cont2 = 0;
    $("#add-player").click(function(){
        /*Variables per a poder controlar el div internament*/
        cont2++;
        var del = "npc"+cont2;
        
        /*Variables del enemic*/
        var npc = "Test";
        var imglink = "";
        var vida = "0";
        var ta = "0";
        var turn = "0";
        var damage = "0";
        var atq = "0";
        var def = "0";
        var pod = "n/a";
        
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
                            <div class="column1">TA</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+ta+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">Turno</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+turn+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">Daño</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+damage+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">Ataque</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+atq+'</div>\n\
                        </div>\n\
                        <div class="row-middle">\n\
                            <div class="column1">Defensa</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+def+'</div>\n\
                        </div>\n\
                        <div class="row-bottom">\n\
                            <div class="column1">Poderes</div>\n\
                            <div class="column2">= &nbsp;</div>\n\
                            <div class="column3">'+pod+'</div>\n\
                        </div>\n\
                    </div>\n\
                    <button value="'+del+'" class="modfitxa">Modifica!</button>\n\
                    <button  value="'+del+'" onclick="deleete(this);" class="delfitxa">-</button>\n\
                </div>\n\
            ';
        /*Imprimim el div*/
        var content = $("#todo-player").html();
        $("#todo-player").html(content+" "+newnpc);
    });
    
    var cont3 = 0;
    $("#add-item").click(function(){
        /*Variables per a poder controlar el div internament*/
        cont3++;
        var del = "item"+cont3;
        
        /*Variables del enemic*/
        var item = "Test";
        var imglink = "";
        var description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        
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
                    <button value="'+del+'" class="modfitxa">Modifica!</button>\n\
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