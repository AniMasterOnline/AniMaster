<html>
    <head>
        <title>Taula del master</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <LINK REL=StyleSheet HREF="Public/css/mesaStyle.css" TYPE="text/css" MEDIA=screen />
        <!-- <script src="fondo.js"></script> -->
        <script src="Public/jquery/jquery-1.12.0.min.js"></script>
        <script src="Public/jquery/mesa.js"></script>
    </head>
    <body>
        <!-- Header content box -->
        <?php include "Public/layouts/menu.php";?>
        <!-- Panel content box -->
        <div class="mpanel-box">
            <div class="mpanel-nav">
                <ul class="mnav">
                    <li><a> <img src="Public/img/mesa/eye.png" class="eye"/> Monstres</a></li>
                    <li><a> <img src="Public/img/mesa/eye.png" class="eye"/> Jugadors</a></li>
                    <li><a> <img src="Public/img/mesa/eye.png" class="eye"/> Objectes</a></li>
                    
                    <li style="float:right;"><a> <img src="Public/img/mesa/vida.png" class="accio"/> </a></li>
                    <li style="float:right;"><a> <img src="Public/img/mesa/daus.png" class="accio"/> </a></li>
                    <li style="float:right;"><a> <img src="Public/img/mesa/batalla2.png" class="accio"/> </a></li>
                    
                </ul>
            </div>
        </div>
        <!-- Aside Multimedia content -->
        <div class="mesa-multimedia">
            <div class="hang"><p>HANGOUT</p></div>
            <div class="chat"><p>CHAT</p></div>
            <div class="musica">
                <div class="clip">
                    <audio controls loop><source src="Public/musica/classica.mp3" type="audio/mpeg"></audio>
                </div>
                <div class="clip">
                    <audio controls loop><source src="Public/musica/classica.mp3" type="audio/mpeg"></audio>
                </div>
                <div class="clip">
                    <audio controls loop><source src="Public/musica/classica.mp3" type="audio/mpeg"></audio>
                </div>
            </div>
        </div>
        <!-- Body content box -->
        <div class="mesa-content">
            <div id="taulmonst" class="fitxam">
            <div>
                <table class="llista">
                    <tr>
                        <td class="selfit">1º Enemic</td>
                        <td class="selfit">2º Enemic</td>
                        <td class="selfit">3º Enemic</td>
                        <td class="selfit">4º Enemic</td>
                    </tr>
                </table>
            </div>
            <div class="todofitxa">
                <div class="dalt">
                    <div class="imatgefit"></div>
                        <div class="dadaph"></div>
                        <div class="dadatrn"></div>
                        <div class="dadaatk"></div>
                        <div class="dadadany"></div>
                        <div class="dadadef"></div>
                        <div class="dadata"></div>
                </div>
                <div class="centre">
                    <table>
                        <tr>
                            <td>poderes</td>
                        </tr>
                    </table>
                </div>
                <div class="baix">
                    <div class="modus"></div>
                </div>
            </div>
        </div>
        <div id="taulpj" class="fitxap">
            Players
        </div>
        <div id="taulobj" class="fitxao">
            Objectes
        </div>
        </div>
        
        <!-- Footer content box --> 
        <div id="footer">
            <p>
                <a href="copyright.html">@Copyright by AniMasterOnline</a>
            </p>
        </div>

        
    </body>
</html>