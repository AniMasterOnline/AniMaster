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
        <LINK REL=StyleSheet HREF="public/css/bodyStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="public/css/headerStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="public/css/contentStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="public/css/footerStyle.css" TYPE="text/css" MEDIA=screen>
    </head>
    <body>
        <!-- Debug Mode -->
        <?php include "system/Errors.php"; ?>
        
        <!-- Header content box -->
        <?php include "public/layouts/menu.php";?>
        
        <!-- Body box -->
        <div class="body-box">
            <!-- Body content box -->
            <div class="content-boxPanel">
                <div class="content-titlePanel">
                    PHP usuario SESSION
                    <?php
                        if(isset($_SESSION['usuario_nombre'])) {
                    ?>
                    Benvingut: <a href="perfil.php?id=<?=$_SESSION['usuario_id']?>"><strong><?=$_SESSION['usuario_nombre']?></strong></a>
                    <a href="logout.php">Cerrar Sesión</a>
                    <?php
                        }
                    ?>
                </div>
                <div class="content-zone">
                    <div class="content-capçalera">
                    <div class="content-image-perfil"></div>
                    <div class="content-box-estadistiques">
                        <h2>Estadístiques</h2>
                        <lu>
                            <li>Espai disponible</li>
                            <li>Ús d'espai</li>
                            <li>Sessió iniciada X vegades</li>
                            <li>A</li>
                        </lu>
                        
                    </div>
                    </div>
                    Secció Master 
                    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
                    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                </div>
            </div>
        </div>
        <!-- Footer content box -->
        <?php include "public/layouts/footer.php";?>
    </body>
</html>
