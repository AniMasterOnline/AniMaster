<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <LINK REL=StyleSheet HREF="Public/css/bodyStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/headerStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/loginStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/footerStyle.css" TYPE="text/css" MEDIA=screen>
    </head>
    <body>
        <!-- Debug Mode -->
        <?php include "System/Errors.php"; ?>
        
        <!-- Header content box -->
        <?php include "Public/layouts/menu.php";?>
        
        <!-- Body box -->
        <div class="body-box">
            <!-- Login content box -->
            <div class="login-title">
                Animaster Online Login
            </div>
            <div class="login-body">
                <div class="login-box">
                    <form METHOD="POST" ACTION="">
                        <table align="center" BORDER=0>
                            <TR>
                                <TD>
                                    <input class="input" id="user" placeholder="Teléfono, correo o usuario" value="" type="text" name="user" maxlength="16"  autofocus required>
                                </TD>
                            </TR>
                            <TR>
                                <TD>
                                    <input class="input" id="pass" placeholder="Contraseña" value="" type="password" name="pass" maxlength="16" required>
                                </TD>
                            </TR>
                            <TR>
                                <TD>
                                    <input class="input" id="logbutton" type="submit" value="Login">
                                </TD>
                            </TR>
                            <TR>
                                <TD class="chekbox">
                                    <input type="checkbox" name="autologin" value="1">
                                    <label for="checkbox_id">Recordam</label>
                                </TD>
                            </TR>
                        </table>
                        
                    </form>
                </div>
            </div> 
        </div>
        
        <!-- Footer content box -->
        <div class="footer-box">
            ¿Eres nuevo en <span>AniMaster Online</span>? <a class="link" href="signup.php">Regístrate ahora »</a><br>
            ¿Necesitas ayuda? <a class="link" href="mailto:adminmaster@Animaster.com">Por favor contacta al Soporte de AniMasterOnline</a><br>
            <br>
            <hr>
            <?php include "Public/layouts/footer.php";?>
        </div>
        
    </body>
</html> 

