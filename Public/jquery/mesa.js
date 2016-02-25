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
});