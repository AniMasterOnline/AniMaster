$(document).ready(function(){
    $("#panel-partida" ).draggable({ disabled: true, revert: true, containment: "#contenidor-partida", scroll: false});
    $(".calculatedices" ).draggable({ disabled: false, revert: false, containment: "body", scroll: false});
    /*Toggles dels ulls i de les fitxes*/
    var i = 1;
    $("#eyedrag").click(function() {
        var opc;
        i++;
        if (i%2 == 0){
            opc = false;
            $( ".fitxa-open" ).draggable({ disabled: opc, revert: opc, stack: ".mesa-content-open .fitxa-open", containment: ".mesa-content-open", scroll: false});
        }else{
            opc = true;
            $( ".fitxa-open" ).draggable("destroy");
        }
    });
    $("#eyemonst").click(function(){
        $("#taulmonst").toggle(500);
        $( "#taulmonst" ).draggable();
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
    
/*Novetat per al cas de les tirades de daus*/
$(document).ready(function(){
    $("#windowdices").hide();
    /*Toggles dels ulls i de les fitxes*/
    $("#showdices").click(function(){
        var selectedEffect = "fade"; //Jquery-ui --> per a info de mes efectes
        //He mopdificat aquesta part per poder afegir efectes att: David.
        $("#windowdices").toggle(selectedEffect, 500);
        document.getElementById("resultdices").innerHTML = "";
        document.getElementById("base").value = "";
        
    });
});

function calculatedices(){
    var getbase = document.getElementById("base").value;
    if(getbase == ""){
        document.getElementById("resultdices").innerHTML = "<br><p>No has introduit una base a la teva tirada!</p><p>Si us plau, introdueix-la</p>";
    };
    var throwdices;
    var result;
    var moreresults;
    var high = 90;
    throwdices = Math.floor((Math.random() * 100) + 1);
    var base = parseInt(getbase);
    
    if(base >= 200){                                            //En cas de tindre maestria
        if(throwdices <= 2){                                //Pifia
            result = Math.floor((Math.random() * 100) + 1);
            document.getElementById("resultdices").innerHTML = "<br><p>La tirada ha resultat ser una pífia de <b>0"+throwdices+"</b> amb un resultat de <b>"+result+"</b></p>";
        }else{                                              //Tirada normal
            result = throwdices;
            moreresults = "<p>"+throwdices;
            while(throwdices >= high){                     //En cas de que sigui una tirada obert
                    throwdices = Math.floor((Math.random() * 100) + 1);
                    result += throwdices;
                    moreresults += " ; "+throwdices;
                    if(high != 100){high++;};
              }
            moreresults += "</p>";
            result += base;
            document.getElementById("resultdices").innerHTML= "<br><p>El resultat de la teva tirada ha sigut: <b>"+result+"</b></p>"+moreresults;
        }
    }else if(getbase != ""){                                                      //En cas de no tindre maestria
        if(throwdices <= 3){                                //Pifia
            result = Math.floor((Math.random() * 100) + 1);
            document.getElementById("resultdices").innerHTML = "<br><p>La tirada ha resultat ser una pífia de <b>0"+throwdices+"</b> amb un resultat de <b>"+result+"</b></p>";
        }else{
            result = throwdices;
            moreresults = "<p>"+throwdices;
            while(throwdices >= high){                     //En cas de que sigui una tirada obert
                    throwdices = Math.floor((Math.random() * 100) + 1);
                    result += throwdices;
                    moreresults += " ; "+throwdices;
                    if(high != 100){high++;};
              }
            moreresults += "</p>";
            result += base;
            document.getElementById("resultdices").innerHTML= "<br><p>El resultat de la teva tirada ha sigut: <b>"+result+"</b></p>"+moreresults;
        }
    }
}