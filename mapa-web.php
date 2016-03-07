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
        <script src="Public/jquery/jquery-1.12.0.min.js"></script>
        <script src="Public/jquery/jquery-ui.min.js"></script>
        <script src="Public/jquery/panel.js"></script>
    </head>
    <body>
        <!-- Header content box -->
        <?php include "Public/layouts/menu.php"; ?>
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
                    AniMaster Online - Mapa Web 
                </div>
                <div class="content-panel-zone">
                    <div id="partida-0" class="content-panel-partida">
                        <div id="accordion-devblog">
                            <h3>Mapa Web</h3>
                            <div>
                                <ul>
                                    <li>- <a style="color: white; font-family: monospace;" href="index.php" >Inici</a></li>
                                    <li>- <a style="color: white; font-family: monospace;" href="devblog.php" >Novetats</a></li>
                                    <li>- <a style="color: white; font-family: monospace;" href="panel.php" >Panell</a></li>
                                    <li>- <a style="color: white; font-family: monospace;" href="mesav2.php" >Taulell</a></li>
                                    <li>- <a style="color: white; font-family: monospace;" href="signup.php" >SignUp</a></li>
                                    <li>- <a style="color: white; font-family: monospace;" href="login.php" >LogIn</a></li>
                                </ul>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer content box -->
        <?php include "Public/layouts/footer.php";?>
    </body>
</html>

