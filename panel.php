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
        <!-- Debug Mode -->
        <?php include "system/Errors.php"; ?>
        
        <!-- Header content box -->
        <?php 
            include "public/layouts/menu.php";
            if(!isset($_SESSION['usuari'])){
                    header('Location: login.php'); 
            }
        ?>
        <!-- Aside content box -->
        <div class="body-box">
            <!-- Aside content box -->
            <div class="aside-box">
                <div class="aside-title">
                    Settings
                </div>
                <div class="aside-1">
                    coses
                </div>
            </div>
            <!-- Body content box -->
            <div class="content-box">
                <div class="content-title">
                    <?php
                        echo "Panel de ".$value['user'];
                    ?>
                </div>
                <div class="content-slider">
                    
                </div>
                <div class="content-zone">
                    content 
                    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
                </div>
            </div>
        </div>
        <!-- Footer content box -->
        <?php include "Public/layouts/footer.php";?>
    </body>
</html>
