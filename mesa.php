<html>
    <head>
        <title>Taula del master</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <LINK REL=StyleSheet HREF="Public/css/css-mesa.css" TYPE="text/css" MEDIA=screen />
        <LINK REL=StyleSheet HREF="Public/css/footerStyle.css" TYPE="text/css" MEDIA=screen>
        <LINK REL=StyleSheet HREF="Public/css/headerStyle.css" TYPE="text/css" MEDIA=screen>
        <!--<script src="fondo.js"></script>-->
        <script src="Public/jquery/jquery-1.12.0.min.js"></script>
        <script src="Public/jquery/mesa.js"></script>
    </head>
    <body>
        <!-- Header content box -->
                <?php include "Public/layouts/menu.php";?>
        <!-- Body content box -->
        <div id="contingut">
            <div id="cos">
                <div id="fitxes">
                    <table id="botmonst" class="botoesq">
                        <tr>
                            <td id="eyemonst">
                                <img src="Public/img/mesa/eye.png" class="eye"/>
                            </td>
                            <td id="selmonst">
                                <p>Monstres</p>
                            </td>
                        </tr>
                    </table>
                    <table id="botpj" class="botoesq">
                        <tr>
                            <td id="eyepj">
                                <img src="Public/img/mesa/eye.png" class="eye"/>
                            </td>
                            <td id="selpj">
                                <p>Jugadors</p>
                            </td>
                        </tr>
                    </table>
                    <table id="botobj" class="botoesq">
                        <tr>
                            <td id="eyeobj">
                                <img src="Public/img/mesa/eye.png" class="eye"/>
                            </td>
                            <td id="selobj">
                                <p>Objectes</p>
                            </td>
                        </tr>
                    </table>
                    <table id="vida" class="botodret"><tr><td><img src="Public/img/mesa/vida.png" class="accio"/></td></tr></table>
                    <table id="dados" class="botodret"><tr><td><img src="Public/img/mesa/daus.png" class="accio"/></td></tr></table>
                    <table id="lucha" class="botodret"><tr><td><img src="Public/img/mesa/batalla2.png" class="accio"/></td></tr></table>
                </div>
                <div id="subcos">
                    <div id="taula">
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
                                    <div class="baseesq"></div>
                                    <div class="basedret"></div>
                                </div>
                                <div class="centre"></div>
                                <div class="baix"></div>
                            </div>
                        </div>
                        <div id="taulpj" class="fitxap"></div>
                        <div id="taulobj" class="fitxao"></div>
                    </div>
                    <div id="multimedia">
                        <div class="hang"><p>HANGOUT</p></div>
                        <div class="chat"><p>CHAT</p></div>
                        <div class="musica">
                            <div class="clip1">
                                <audio controls loop><source src="Public/musica/classica.mp3" type="audio/mpeg"></audio>
                            </div>
                            <div class="clip1">
                                <audio controls loop><source src="Public/musica/classica.mp3" type="audio/mpeg"></audio>
                            </div>
                            <div class="clip1">
                                <audio controls loop><source src="Public/musica/classica.mp3" type="audio/mpeg"></audio>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer"><p><a href="copyright.html">@Copyright by AniMasterOnline</a></p></div>
        </div>
        
    </body>
</html>