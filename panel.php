<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Panel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico">
        <LINK REL=StyleSheet HREF="Public/css/bodyStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/asideStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/contentStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/headerStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/footerStyle.css" TYPE="text/css" MEDIA=screen>
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="Public/jquery/jquery-1.12.0.min.js"></script>
        <script src="Public/jquery/jquery-ui.min.js"></script>
        <script src="Public/jquery/panel.js"></script>
    </head>
    <body>
        <!-- Header content box -->
        <?php include "Public/layouts/menu.php"; ?>
        
        <?php
            if(!isset($_SESSION['usuari'])){
                    header('Location: login.php'); 
            }
        ?>
        <!-- Aside content box -->
        <div class="body-box">
            <!-- Aside content box -->
            <div class="aside-box-hidden">
                <div class="aside-title">
                    Settings
                </div>
                <div class="aside-1">
                    coses
                </div>
            </div>
            <!-- Body content box -->
            <div class="content-box-100">
                <div class="content-title">
                    <?php
                        echo "Panel de ".$value['user'];
                    ?>
                </div>
                <div class="content-panel">
                    <div class="user-box">
                        <div class="user-img">&nbsp;</div>
                        <div class="user-set">&nbsp;</div>
                    </div>
                </div>
                <div id=panel-buttons" class="content-buttons">
                    <button id="add-partida">+</button>
                </div>
                <div class="content-panel-zone">
                    <div id="form-add-partida" class="content-panel-partida">
                        <form method="post" action="System/Protocols/registrarPartida.php">
                            <h2>Crea la teva Partida</h2>
                            <input class="input-partida" id="titol" placeholder="Titol *" value="" type="text" name="TempTitol" maxlength="32" required autofocus>
                            <input class="input-partida" id="descripcio" placeholder="Descripcio" value="" type="text" name="TempDescripcio" maxlength="250">
                            <input class="input-partida" id="any_partida" placeholder="Any de la partida" value="" type="number" name="TempAny_partida" maxlength="10">
                            <input class="input-partida" id="nivel_sobrenatural" placeholder="Nivell sobrenatural" value="" type="number" name="TempNivel_sobrenatural" maxlength="32">
                            <select class="input-partida" disabled>
                                <option value="0" >Anima</option>
                                <option value="1" >.....</option>
                                <option value="2" >.....</option>
                            </select>
                            <input class="input-crea" id="logbutton" type="submit" value="Crea">
                        </form>
                    </div>
                    <div id="partida-1" class="content-panel-partida">
                        Partida 1
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- Footer content box -->
        <?php include "Public/layouts/footer.php";?>
    </body>
</html>
