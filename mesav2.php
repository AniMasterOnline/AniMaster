<html>
    <head>
        <title>Taula del master</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="shortcut icon" href="favicon.ico">
        <LINK REL=StyleSheet HREF="Public/css/mesaStyle.css" TYPE="text/css" MEDIA=screen />
        <script src="Public/jquery/jquery-1.12.0.min.js"></script>
        <script src="Public/jquery/jquery-ui.min.js"></script>
        <script src="Public/jquery/mesa.js"></script>
        <script src="Public/jquery/load-mesa.js"></script>
        <script src="Public/jquery/add-mesa.js"></script>
    </head>
    <body>
        <!-- Header content box -->
        <?php include "Public/layouts/menu.php";?>
        <?php
            if(!isset($_SESSION['usuari'])){
                    header('Location: login.php'); 
            }
        ?>
        <div id="contenidor-partida">
            <div id="panel-partida">
                <h2 id="PartSel-title">Selecciona la teva partida!!</h2>
                <div id="PartSel">
                    <select name="selpart" id="selpart" autofocus>
                        <?php
                        require_once(__DIR__.'/System/Classes/Usuari_Partida.php');
                        require_once(__DIR__.'/System/Classes/Partida.php');
                        $Usuari_Partida = new Usuari_Partida();
                        $Taula_Usuari_Partida = $Usuari_Partida->view_user($value['id_usuari']);
                        $cont = 0;
                        foreach ($Taula_Usuari_Partida as $row) {
                            $Partida = new Partida();
                                echo '<option  name="'.$row->id_partida.'" value="'.$cont.'">'.$Partida->get_titol($row->id_partida).'</option>';
                                $cont++;
                        }
                        ?>
                    </select>
                    <button id="selPartida">Jugar!</button>
                    <?php
                    $tup = $Usuari_Partida->view_user($value['id_usuari']);
                    $Part= new Partida();
                    $rtn = array();
                    foreach ($tup as $row) {
                        $var = $Part->get_all($row->id_partida);
                        array_push($rtn, $var);
                    }
                    $json = json_encode( (array)$rtn );
                    echo ' <script>jsonPartida = '.$json.';</script>';
                    echo '';
                    ?>
                </div>
                <div id="PartSel-llista">
                    <input class="input-partida" id="id_usuari" value="<?php if ($rtn != null){ echo $value['id_usuari']; };?>" type="hidden" name="TempId_usuari">
                    <input class="input-partida" id="id_partida" value="<?php if ($rtn != null){ echo $rtn[0]['id_partida']; };?>" type="hidden" name="TempId_partida">
                    <input class="input-partida" id="titol" value="<?php if ($rtn != null){ echo $rtn[0]['titol']; };?>" type="hidden" name="TempTitol">
                    <input class="input-partida" id="descripcio" value="<?php if ($rtn != null){ echo $rtn[0]['descripcio']; };?>" type="text" name="TempDescripcio">
                    <input class="input-partida" id="any_partida" value="<?php if ($rtn != null){ echo $rtn[0]['any_partida']; };?>" type="number" name="TempAny_partida">
                    <input class="input-partida" id="nivel_sobrenatural" value="<?php if ($rtn != null){ echo $rtn[0]['nivel_sobrenatural']; };?>" type="number" name="TempNivel_sobrenatural" >
                    <select id="disabled-joc" class="input-partida-bottom" name="TempJoc">
                        <option value="Anima" selected>Anima</option>
                        <option value="Test" >Test</option>
                    </select>
                </div>
            </div>
        </div>
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
                    <li style="float:right;"><a> <img src="Public/img/favicon/heart.ico" class="accio"/> </a></li>
                    <li style="float:right;"><a id="showdices"> <img src="Public/img/favicon/d20.ico" class="accio"/> </a></li>
                    <li style="float:right;"><a> <img src="Public/img/favicon/damage.ico" class="accio"/> </a></li>
                    <li style="float:right;"><a id="eyedrag"> <img src="Public/img/favicon/wings.ico" class="accio"/> </a></li>
                </ul>
            </div>
        </div>
        <!-- Aside Multimedia content -->
        <div id="mesa-multimedia" class="mesa-multimedia-open">
            <div class="hang">
                <script src="https://apis.google.com/js/platform.js" async defer></script>
                <div class="g-hangout" data-render="createhangout" ></div>
            </div>
            <div class="chat">
                <img src="Public/img/slide1.jpg" style="width: 100%;height: 100%"/>
            </div>
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
                <h2 class="fitxa-title">Enemics</h2>
                <div class="llista">
                    <select name="npc" class="selfit">
                        <option value="1">Soldado</option>
                        <option value="2">Lobo</option>
                        <option value="3">Araña gigante</option>
                        <option value="4">Chutlu</option>
                    </select>
                    <button id="add-monster" class="selfit-button">+</button>
                </div>
                <div id="todo-monster" class="todofitxa">
                    
                </div>
            </div>
            <div id="taulpj" class="fitxa-open">
                <h2 class="fitxa-title">Jugadors</h2>
                <div class="llista">
                    <select name="pj" class="selfit">
                        <option value="1">Marc</option>
                        <option value="2">Eduard</option>
                        <option value="3">Pau</option>
                        <option value="4">David</option>
                    </select>
                    <button id="add-player" class="selfit-button">+</button>
                </div>
                <div id="todo-player" class="todofitxa">
                    
                </div>
            </div>
            <div id="taulobj" class="fitxa-open">
                <h2 class="fitxa-title">Objectes</h2>
                <div class="llista">
                    <select name="obj" class="selfit">
                        <option value="1">obj - 1</option>
                        <option value="2">obj - 2</option>
                        <option value="3">obj - 3</option>
                        <option value="4">obj - 4</option>
                    </select>
                    <button id="add-item" class="selfit-button">+</button>
                </div>
                <div id="todo-item" class="todofitxa">
                    
                </div>
            </div>
            <!-- Footer content box --> 
            <div id="footer">
                <center>
                <span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">AniMasterOnline</span> de <span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">Marc, Jacob i David</span> està subjecta a una llicència de Reconeixement-NoComercial-CompartirIgual 4.0 Internacional de Creative Commons
                </center>
            </div>
            
            <!-- Calculadora content box --> 
            <div class="calculatedices" id="windowdices" >
                <p>Fica una base per a calcular la teva tirada</p>
                <form>
                    Base: <input type="number" id="base"/>
                    <input class="submitdices" type="button" value="Envia" onclick="calculatedices()"/>
                </form>
                <p id="resultdices"></p>
            </div>
    </body>
</html>
