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
    
});