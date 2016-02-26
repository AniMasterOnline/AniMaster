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
        <div id="mpanel-box" class="mpanel-box-open">
            <div class="mpanel-nav">
                <ul class="mnav">
                    <li><a id="eyemonst"> <img src="Public/img/mesa/eye.png" class="eye"/> Monstres</a></li>
                    <li><a id="eyepj"> <img src="Public/img/mesa/eye.png" class="eye"/> Jugadors</a></li>
                    <li><a id="eyeobj"> <img src="Public/img/mesa/eye.png" class="eye"/> Objectes</a></li>
                    <li style="float:right;">
                        <a id="sidebar-toggle">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </a>
                    </li>
                    <li style="float:right;"><a> <img src="Public/img/mesa/vida.png" class="accio"/> </a></li>
                    <li style="float:right;"><a> <img src="Public/img/mesa/daus.png" class="accio"/> </a></li>
                    <li style="float:right;"><a> <img src="Public/img/mesa/batalla2.png" class="accio"/> </a></li>
                    
                </ul>
            </div>
        </div>
        <!-- Aside Multimedia content -->
        <div id="mesa-multimedia" class="mesa-multimedia-open">
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
        <div id="mesa-content" class="mesa-content-open">
            <div id="taulmonst" class="fitxa-closed">
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
            <div id="taulpj" class="fitxa-closed">
                player
            </div>
            <div id="taulobj" class="fitxa-closed">
                objectes
            </div>
            <div id="footer">
                <a href="copyright.html">@Copyright by AniMasterOnline</a>
            
            </div>
        </div>
        
        <!-- Footer content box --> 
        
    </body>
</html>