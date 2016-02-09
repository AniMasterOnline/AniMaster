<html>
    <head>
        <title>AniMasterOnline</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <LINK REL=StyleSheet HREF="public/css/bodyStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="public/css/headerStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="public/css/contentStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="public/css/asideStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="public/css/footerStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="public/css/slydeStyle.css" TYPE="text/css" MEDIA=screen>
        <script src="public/jquery/jquery-1.12.0.min.js"></script>
        <script src="public/jquery/slyder.js"></script>
    </head>
    <body>
        <!-- Debug Mode --> 
        <?php include "system/Errors.php"; ?>
        
        
        
        <!-- Header content box -->
        <?php include "public/layouts/menu.php";?>
        
        <!-- Aside content box -->
        <div class="body-box">
            <!-- Aside content box -->
            <div class="aside-box">
                <div class="aside-title">
                    SignUp
                </div>
                <div class="aside-2">
                    <?php include "public/layouts/registre.php";?>
                </div>
            </div>
            <!-- Body content box -->
            <div class="content-box">
                <div class="content-title">
                    AniMaster Online Title
                </div>
                <div class="content-slider">
                    <div id="slider">
                        <img src="public/img/slide1.jpg">
                        <img src="public/img/slide2.jpg">
                        <img src="public/img/slide3.jpg">
                        <img src="public/img/slide4.jpg">
                    </div>
                </div>
                <div class="content-zone">
                    content 
                    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
                    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                </div>
            </div>
        </div>
        <!-- Footer content box -->
        <?php include "public/layouts/footer.php";?>
    </body>
</html>



