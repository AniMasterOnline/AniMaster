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
                    <button id="btp0">toggle 0</button><button id="btp1">toggle 1</button><button id="btp2">toggle 2</button>
                </div>
                <div id="panel0" class="content-zone">
                    panel 0
                    <br> <br> <br> <br> 
                </div>
                <div id="panel1" class="content-zone">
                    panel 1
                    <br> <br> <br> <br>  
                </div>
                <div id="panel2" class="content-zone">
                    panel 2
                    <br> <br> <br> <br>  
                </div>
            </div>
        </div>
        <!-- Footer content box -->
        <?php include "Public/layouts/footer.php";?>
    </body>
</html>
