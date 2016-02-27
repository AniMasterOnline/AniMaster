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
        
        <?php
            if(!isset($_SESSION['usuari'])){
                    header('Location: login.php'); 
            }
        ?>
        
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
            <div id="taulmonst" class="fitxa-open">
                <h2 class="fitxa-title"><center>Enemics</center></h2>
                <div class="llista">
                    <select name="npc" class="selfit">
                        <option value="1">Soldado</option>
                        <option value="2">Lobo</option>
                        <option value="3">Araña gigante</option>
                        <option value="4">Chutlu</option>
                    </select>
                </div>
                <div class="todofitxa">
                    <div class="dalt">
                        <div class="imgfitxa"></div>
                        <div class="txtfitxa">
                            <div class="row-top">
                                <div class="column1">Vida</div>
                                <div class="column2">= &nbsp;</div>
                                <div class="column3">000</div>
                            </div>
                            <div class="row-middle">
                                <div class="column1">TA</div>
                                <div class="column2">= &nbsp;</div>
                                <div class="column3">000</div>
                            </div>
                            <div class="row-middle">
                                <div class="column1">Turno</div>
                                <div class="column2">= &nbsp;</div>
                                <div class="column3">000</div>
                            </div>
                            <div class="row-middle">
                                <div class="column1">Daño</div>
                                <div class="column2">= &nbsp;</div>
                                <div class="column3">000</div>
                            </div>
                            <div class="row-middle">
                                <div class="column1">Ataque</div>
                                <div class="column2">= &nbsp;</div>
                                <div class="column3">000</div>
                            </div>
                            <div class="row-middle">
                                <div class="column1">Defensa</div>
                                <div class="column2">= &nbsp;</div>
                                <div class="column3">000</div>
                            </div>
                            <div class="row-bottom">
                                <div class="column1">Poderes</div>
                                <div class="column2">= &nbsp;</div>
                                <div class="column3">000</div>
                            </div>
                        </div>
                        <button class="modfitxa">Modifica!</button>
                    </div>
                    <div class="centre">
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                    </div>
                    <div class="baix">
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                    </div>
                </div>
            </div>
            <div id="taulpj" class="fitxa-open">
                <h2 class="fitxa-title"><center>Jugadors</center></h2>
                <div class="llista">
                    <select name="pj" class="selfit">
                        <option value="1">Marc</option>
                        <option value="2">Eduard</option>
                        <option value="3">Pau</option>
                        <option value="4">David</option>
                    </select>
                </div>
                <div class="todofitxa">
                    <div class="dalt">
                        <div class="imgfitxa"></div>
                        <div class="txtfitxa">
                            <div class="row-top">
                                <div class="column1">Vida</div>
                                <div class="column2">= &nbsp;</div>
                                <div class="column3">000</div>
                            </div>
                            <div class="row-middle">
                                <div class="column1">TA</div>
                                <div class="column2">= &nbsp;</div>
                                <div class="column3">000</div>
                            </div>
                            <div class="row-middle">
                                <div class="column1">Turno</div>
                                <div class="column2">= &nbsp;</div>
                                <div class="column3">000</div>
                            </div>
                            <div class="row-middle">
                                <div class="column1">Daño</div>
                                <div class="column2">= &nbsp;</div>
                                <div class="column3">000</div>
                            </div>
                            <div class="row-middle">
                                <div class="column1">Ataque</div>
                                <div class="column2">= &nbsp;</div>
                                <div class="column3">000</div>
                            </div>
                            <div class="row-middle">
                                <div class="column1">Defensa</div>
                                <div class="column2">= &nbsp;</div>
                                <div class="column3">000</div>
                            </div>
                            <div class="row-bottom">
                                <div class="column1">Poderes</div>
                                <div class="column2">= &nbsp;</div>
                                <div class="column3">000</div>
                            </div>
                        </div>
                        <button class="modfitxa">Modifica!</button>
                    </div>
                    <div class="centre">
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                    </div>
                    <div class="baix">
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                    </div>
                </div>
            </div>
            <div id="taulobj" class="fitxa-open">
                <h2 class="fitxa-title"><center>Objectes</center></h2>
                <div class="llista">
                    <select name="obj" class="selfit">
                        <option value="1">obj - 1</option>
                        <option value="2">obj - 2</option>
                        <option value="3">obj - 3</option>
                        <option value="4">obj - 4</option>
                    </select>
                </div>
                <div class="todofitxa">
                    <div class="dalt">
                        <div class="imgfitxa"></div>
                        <div class="txtfitxa">
                            <div class="row-top">
                                <div class="column1">Descripció</div>
                            </div>
                            <div class="row-bottom">
                                <div class="column3">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <button class="modfitxa">Modifica!</button>
                    </div>
                    <div class="centre">
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                    </div>
                    <div class="baix">
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                    </div>
                </div>
            </div>
            <!-- Footer content box --> 
            <div id="footer">
                <center>
                <span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">AniMasterOnline</span> de <span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">Marc, Jacob i David</span> està subjecta a una llicència de <a class="link" rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Reconeixement-NoComercial-CompartirIgual 4.0 Internacional de Creative Commons</a>
                </center>
            </div>
    </body>
</html>