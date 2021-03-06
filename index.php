<html>
    <head>
        <title>AniMasterOnline</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico">
        <LINK REL=StyleSheet HREF="Public/css/bodyStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/headerStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/contentStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/asideStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/footerStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/slydeStyle.css" TYPE="text/css" MEDIA=screen>
        <script src="Public/jquery/jquery-1.12.0.min.js"></script>
        <script src="Public/jquery/slyder.js"></script>
    </head>
    <body>
        <!-- Header content box -->
        <?php include "Public/layouts/menu.php";?>
        
        <!-- Aside content box -->
        <div class="body-box">
            <!-- Aside content box -->
            <div class="aside-box">
                <div class="aside-title">
                    SignUp
                </div>
                <div class="aside-2">
                    <?php include "Public/layouts/registre.php";?>
                </div>
            </div>
            <!-- Body content box -->
            <div class="content-box">
                <div class="content-title">
                    AniMaster Online
                </div>
                <div class="content-slider">
                    <div id="slider">
                        <img src="Public/img/slider1.jpg">
                        <img src="Public/img/slider2.jpg">
                        <img src="Public/img/slider3.jpg">
                        <img src="Public/img/slider4.jpg">
                        <img src="Public/img/slider5.jpg">
                        <img src="Public/img/slider6.jpg">
                        <img src="Public/img/slider7.jpg">
                        <img src="Public/img/slider8.jpg">
                        <img src="Public/img/slider9.jpg">
                    </div>
                </div>
                <div class="content-zone-inici">
                    
                    <ul><h1 class="title" >Instruccions a seguir...</h1>
                        <p class='top-p'>Amb 4 senzills passos et guiarem per poder crear la teva partida i gestionar els teus enemics, jugadors i items.</p>
                        <li><h2 class="subtitle">1. Registre</h2></li>
                        <p class="linia">Omplir el formulari de registre que tens a la dreta de la pàgina web amb les teves dades personals.</p><br>
                        <li><h2 class="subtitle">2. Loguejar-nos</h2>
                        <p class="linia">Fem clic a Login, en el menú superior dret. Emplenem les nostres dades i ens loguejem</p></li><br>
                        <li><h2 class="subtitle">3. Creació de recursos</h2>
                        <p class="linia">Un cop logejats, ens trovarem en el nostre panell des d'on podrem crear o eliminar Enemics, Jugadors i Items. Però abans haurem de crear una partida.</p><br>
                        </li><h2 class="subtitle">4. A Dirigir!</h2>
                        <p class="linia">Fem clic a Taulell, en el menú superior. Seleccionem la partida que desitgem administrar.</p>
                        <li><h3 class="subsubtitle">4.1 Enemics / NPC's / Items</h3>
                        <p class="linia">Seleccionem l'enemic que volem mostrar. Si desitgem eliminar-lo de la pantalla, fem clic al botó de sota amb el signe ( - ).</p></li>
                        <li><h3 class="subsubtitle">4.2 Mobilitat</h3>
                        <p class="linia">Seleccionem la icona del ala, per poder moure dintre de la pàgina web les tres columnes que tenim de enemics, npc's i items.</p></li>
                        <li><h3 class="subsubtitle">4.3 Calculadora</h3>
                        <p class="linia">Seleccionem la icona del dau roig per poder introduir la base de les habilitats i tirar automàticament els daus sumant el resultat.</p></li>
                        <li><h3 class="subsubtitle">4.4 Hangout</h3>
                        <p class="linia">Si cliques en el botó de la dreta amb les 3 ratlles, s'obirà un menú a la dreta. Si volem dur a terme una partida amb els nostres amics podem trucar-los des de l'aplicació de Hangout fent clic a la icona de Play.</p></li>
                        <li><h3 class="subsubtitle">4.5 Música</h3>
                        <p class="linia">Si desitjem ambientar les nostres partides, podem fer clic a sobre les músiques predefinides a sota del mapa d'ambientació.</p></li>
                    
                    </ul>
                    <br> <br>
                </div>
            </div>
        </div>
        <!-- Footer content box -->
        <?php include "Public/layouts/footer.php";?>
    </body>
</html>



