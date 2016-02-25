var cont=10;
var tonalitat="fosc";
        function colorcos(colorsel){
            if(colorsel == "red"){
                colorred();
            }else if(colorsel == "blue"){
                colorblue();
            }else if(colorsel == "green"){
                colorgreen();
            }else if(colorsel == "purple"){
                colorpurple();
            }else if(colorsel == "yellow"){
                coloryellow();
            }else if(colorsel == "grey"){
                colorgrey();
            }else if(colorsel == "cian"){
                colorcian();
            }
            
        }
        function colorred(){
            if(tonalitat=="fosc"){
                if (cont<99){
                cont++;
                }
                if(cont==99){
                    tonalitat="clar";
                }
            }else if(tonalitat=="clar"){
                if (cont>10){
                cont--;
                }
                if(cont==11){
                    tonalitat="fosc";
                }
            }
            var valor= "#"+cont+"0000";
            document.bgColor=valor;
            setTimeout(colorred,1000);
        }
        function colorblue(){
            if(tonalitat=="fosc"){
                if (cont<99){
                cont++;
                }
                if(cont==99){
                    tonalitat="clar";
                }
            }else if(tonalitat=="clar"){
                if (cont>10){
                cont--;
                }
                if(cont==11){
                    tonalitat="fosc";
                }
            }
            var valor= "#0000"+cont;
            document.bgColor=valor;
            setTimeout(colorblue,10);
        }
        function colorgreen(){
            if(tonalitat=="fosc"){
                if (cont<99){
                cont++;
                }
                if(cont==99){
                    tonalitat="clar";
                }
            }else if(tonalitat=="clar"){
                if (cont>10){
                cont--;
                }
                if(cont==11){
                    tonalitat="fosc";
                }
            }
            
            var valor= "#"+"00"+cont+"00";
            document.bgColor=valor;
            setTimeout(colorgreen,10);
        }
        function colorpurple(){
            if(tonalitat=="fosc"){
                if (cont<99){
                cont++;
                }
                if(cont==99){
                    tonalitat="clar";
                }
            }else if(tonalitat=="clar"){
                if (cont>10){
                cont--;
                }
                if(cont==11){
                    tonalitat="fosc";
                }
            }
            
            var valor= "#"+cont+"00"+cont;
            document.bgColor=valor;
            setTimeout(colorpurple,10);
        }
        function colorcian(){
            if(tonalitat=="fosc"){
                if (cont<99){
                cont++;
                }
                if(cont==99){
                    tonalitat="clar";
                }
            }else if(tonalitat=="clar"){
                if (cont>10){
                cont--;
                }
                if(cont==11){
                    tonalitat="fosc";
                }
            }
            
            var valor= "#"+"00"+cont+cont;
            document.bgColor=valor;
            setTimeout(colorcian,10);
        }
        function coloryellow(){
            if(tonalitat=="fosc"){
                if (cont<99){
                cont++;
                }
                if(cont==99){
                    tonalitat="clar";
                }
            }else if(tonalitat=="clar"){
                if (cont>10){
                cont--;
                }
                if(cont==11){
                    tonalitat="fosc";
                }
            }
            
            var valor= "#"+cont+cont+"00";
            document.bgColor=valor;
            setTimeout(coloryellow,10);
        }
        function colorgrey(){
            if(tonalitat=="fosc"){
                if (cont<99){
                cont++;
                }
                if(cont==99){
                    tonalitat="clar";
                }
            }else if(tonalitat=="clar"){
                if (cont>10){
                cont--;
                }
                if(cont==11){
                    tonalitat="fosc";
                }
            }
            
            var valor= "#"+cont+cont+cont;
            document.bgColor=valor;
            setTimeout(colorgrey,10);
        }