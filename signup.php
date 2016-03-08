<html>
    <head>
        <title>Signup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico">
        <LINK REL=StyleSheet HREF="Public/css/bodyStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/headerStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/loginStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/footerStyle.css" TYPE="text/css" MEDIA=screen>
    </head>
    <body>
        <!-- Header content box -->
        <?php include "Public/layouts/menu.php";?>
        <?php
            if(isset($_SESSION['usuari'])){
                    header('Location: panel.php'); 
            }
        ?>
        
        <!-- Body box -->
        <div class="body-box">
            <!-- Login content box -->
            <div class="login-title">
                Uneix-te avui a Animaster Online
            </div>
            <div class="login-body">
                <div class="login-box">
                    <?php include "Public/layouts/registre.php";?>
                </div>
            </div>
        </div>
        
        <!-- Footer content box -->
        <div class="footer-box">
            ¿Ja estàs registrat a <span>AniMaster Online</span>? <a class="link" href="login.php">Accedeix ara »</a><br>
            ¿Necessites ajuda? <a class="link" href="mailto:adminmaster@Animaster.com">Contacta amb el Suport de AniMasterOnline</a><br>
        </div>
    </body>
</html> 

