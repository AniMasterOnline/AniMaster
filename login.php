<html>
    <head>
        <title>Login</title>
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
        
        <!-- Body box -->
        <div class="body-box">
            <!-- Login content box -->
            <div class="login-title">
                Animaster Online Login
            </div>
            <div class="login-body">
                <div class="login-box">
                    <form METHOD="POST" ACTION="System/Protocols/loginUsuari.php">
                        <table align="center" BORDER=0>
                            <TR>
                                <TD>
                                    <input class="input" id="user" placeholder="Usuari" value="" type="text" name="user" maxlength="16"  autofocus required>
                                </TD>
                            </TR>
                            <TR>
                                <TD>
                                    <input class="input" id="pass" placeholder="Contrasenya" value="" type="password" name="pass" maxlength="16" required>
                                </TD>
                            </TR>
                            <TR>
                                <TD>
                                    <input class="input" id="logbutton" type="submit" value="Login" name="login">
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
            ¿Ets nou a <span>AniMaster Online</span>? <a class="link" href="signup.php">Registrat ara »</a><br>
            ¿Necesites ajuda? <a class="link" href="mailto:adminmaster@Animaster.com">Per favor contacta amb el Soport de AniMasterOnline</a><br>
        </div>
        
    </body>
</html> 

