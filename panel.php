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
                    <button id="monstres">Monstres</button><button id="objectes">Objectes</button><button id="players">Players</button>
                </div>
                <div id="taulamonstres" class="content-panel-zone">
                    panel 0
                    <br> <br> <br> <br> 
                </div>
                <div id="taulaobjectes" class="content-panel-zone">
                    panel 1
                    <br> <br> <br> <br>  
                </div>
                <div id="taulaplayers" class="content-panel-zone">
                    panel 2
                    <br> <br> <br> <br>  
                </div>
                <div style="display:none;" id="dialog-confirm" title="Empty the recycle bin?">
                    
                    <p>
                        <span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
                        These items will be permanently deleted and cannot be recovered. Are you sure?
                    </p>
                </div>
            </div>
        </div>
        <!-- Footer content box -->
        <?php include "Public/layouts/footer.php";?>
    </body>
</html>
