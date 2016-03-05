<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="Public/jquery/jquery-1.12.0.min.js"></script>
        <script src="Public/jquery/jquery-ui.min.js"></script>
        <script src="Public/jquery/panel.js"></script>
    </head>
    <body>
        <!-- Header content box -->
        <?php include "Public/layouts/menu.php"; ?>
        
        <?php
            if(!isset($_SESSION['usuari'])){
                    header('Location: login.php'); 
            }
        ?>
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
                    <?php
                        echo "Panel de ".$value['user'];
                    ?>
                </div>
                <div class="content-panel">
                    <div class="user-box">
                        <div class="user-img"><img src="Public/img/jugador/login.png"/></div>
                        <div class="user-set">&nbsp;</div>
                    </div>
                </div>
                <div id=panel-buttons" class="content-buttons">
                    <?php
                        require_once(__DIR__.'/System/Classes/Usuari_Partida.php');
                        require_once(__DIR__.'/System/Classes/Partida.php');
                        $Usuari_Partida = new Usuari_Partida();
                        $partida = $Usuari_Partida->view_user($value['id_usuari']);
                        $i = 1;
                        echo '<button onclick="mostrar(this);" value="0" id="partida0">+</button>';
                        foreach ($partida as $row) {
                            $Partida = new Partida();
                            echo '<button onclick="mostrar(this);" value="'.$row->id_partida.'" id="partida'.$row->id_partida.'">'.$Partida->get_titol($row->id_partida).'</button>';
                            $i++;
                        }
                    ?>
                </div>
                <div class="content-panel-zone">
                    <div id="partida-0" class="content-panel-partida">
                        <div id="accordion">
                            <h3>Crear una partida</h3>
                            <div>
                                <form method="post" action="System/Protocols/registrarPartida.php">
                                    <input class="input-partida" id="titol" placeholder="Titol *" value="" type="text" name="TempTitol" maxlength="32" required autofocus>
                                    <input class="input-partida" id="descripcio" placeholder="Descripcio *" value="" type="text" name="TempDescripcio" maxlength="250" required>
                                    <input class="input-partida" id="any_partida" placeholder="Any de la partida *" value="" type="number" name="TempAny_partida" required>
                                    <input class="input-partida" id="nivel_sobrenatural" placeholder="Nivell sobrenatural *" value="" type="number" name="TempNivel_sobrenatural" required>
                                    <input class="input-partida" id="id_usuari" placeholder="id_usuari *" value="<?php echo $value['id_usuari'];?>" type="hidden" name="TempId_usuari" required>
                                    <select id="disabled-joc" class="input-partida" name="TempJoc">
                                        <option value="Anima" selected>Anima</option>
                                    </select>
                                    <input class="input-crea" id="logbutton" type="submit" value="Crea">
                                </form>
                            </div>
                            <h3>Crear un enemic</h3>
                            <div>
                                <form method="post" action="System/Protocols/registrarEnemic.php">
                                    <select class="input-partida" name="TempId_Partida" requiered>
                                        <?php
                                        require_once(__DIR__.'/System/Classes/Usuari_Partida.php');
                                        require_once(__DIR__.'/System/Classes/Partida.php');
                                        $Usuari_Partida = new Usuari_Partida();
                                        $Taula_Usuari_Partida = $Usuari_Partida->view_user($value['id_usuari']);
                                        foreach ($Taula_Usuari_Partida as $row) {
                                            $Partida = new Partida();
                                                echo '<option value="'.$row->id_partida.'">'.$Partida->get_titol($row->id_partida).'</option>';
                                        }
                                        ?>
                                    </select>
                                    <input class="input-partida" placeholder="Nom *" type="text" name="TempNom" maxlength="32" required autofocus>
                                    <input class="input-partida" placeholder="Vida *" type="number" name="TempVida" required>
                                    <input class="input-partida" placeholder="Habilidad de ataque *" type="number" name="TempAtaque" required>
                                    <input class="input-partida" placeholder="Daño de arma *" type="number" name="TempArma" required>
                                    <input class="input-partida" placeholder="Habilidad de defensa *" type="number" name="TempDefensa" required>
                                    <input class="input-partida" placeholder="Defensa del armadura *" type="number" name="TempArmadura" required>
                                    <input class="input-partida" placeholder="Turno *" type="number" name="TempTurno" required>
                                    <input class="input-partida" placeholder="Descripció dels poders" type="text" maxlength="200" name="TempPoderes">
                                    <input class="input-crea" id="logbutton" type="submit" value="Crea">
                                </form>
                            </div>
                            <h3>Crear un npc</h3>
                            <div>
                                <form method="post" action="System/Protocols/registrarPlayer.php">
                                    <select class="input-partida" name="TempId_Partida" requiered>
                                        <?php
                                        require_once(__DIR__.'/System/Classes/Usuari_Partida.php');
                                        require_once(__DIR__.'/System/Classes/Partida.php');
                                        $Usuari_Partida = new Usuari_Partida();
                                        $Taula_Usuari_Partida = $Usuari_Partida->view_user($value['id_usuari']);
                                        foreach ($Taula_Usuari_Partida as $row) {
                                            $Partida = new Partida();
                                                echo '<option value="'.$row->id_partida.'">'.$Partida->get_titol($row->id_partida).'</option>';
                                        }
                                        ?>
                                    </select>
                                    <input class="input-partida" placeholder="Nom *" type="text" name="TempNom" maxlength="32" required autofocus>
                                    <input class="input-partida" placeholder="Vida *" type="number" name="TempVida" required>
                                    <input class="input-partida" placeholder="Habilidad de ataque *" type="number" name="TempAtaque" required>
                                    <input class="input-partida" placeholder="Daño de arma *" type="number" name="TempArma" required>
                                    <input class="input-partida" placeholder="Habilidad de defensa *" type="number" name="TempDefensa" required>
                                    <input class="input-partida" placeholder="Defensa del armadura *" type="number" name="TempArmadura" required>
                                    <input class="input-partida" placeholder="Turno *" type="number" name="TempTurno" required>
                                    <input class="input-partida" placeholder="Descripció dels poders" type="text" maxlength="200" name="TempPoderes">
                                    <input class="input-crea" id="logbutton" type="submit" value="Crea">
                                </form>
                            </div>
                            <h3>Crear un item</h3>
                            <div>
                                <form method="post" action="System/Protocols/registrarItem.php">
                                    <select class="input-partida" name="TempId_Partida" requiered>
                                        <?php
                                        require_once(__DIR__.'/System/Classes/Usuari_Partida.php');
                                        require_once(__DIR__.'/System/Classes/Partida.php');
                                        $Usuari_Partida = new Usuari_Partida();
                                        $Taula_Usuari_Partida = $Usuari_Partida->view_user($value['id_usuari']);
                                        foreach ($Taula_Usuari_Partida as $row) {
                                            $Partida = new Partida();
                                                echo '<option value="'.$row->id_partida.'">'.$Partida->get_titol($row->id_partida).'</option>';
                                        }
                                        ?>
                                    </select>
                                    <input class="input-partida" placeholder="Nom *" type="text" name="TempNom"  required autofocus>
                                    <input class="input-partida" placeholder="Descripcio *" type="text" name="TempDescripcio" maxlength="500" required>
                                    <input class="input-crea" id="logbutton" type="submit" value="Crea">
                                </form>
                            </div>
                          </div>
                    </div>
                    <?php
                        $Usuari_Partida = new Usuari_Partida();
                        $partida = $Usuari_Partida->view_user($value['id_usuari']);
                        foreach ($partida as $row) {
                            $Partida = new Partida();
                            echo '<div id="partida-'.$row->id_partida.'" class="content-panel-partida">';
                                echo '
                                    <div class="content-panel-menu">
                                        <button value="'.$row->id_partida.'" onclick="desEnemic(this);">Enemic</button><button value="'.$row->id_partida.'" onclick="desNpc(this);">Npc</button><button value="'.$row->id_partida.'" onclick="desItem(this);">Items</button>
                                    </div>
                                    <div id="Enemic-'.$row->id_partida.'" class="content-panel-partida-content">
                                        Enemic
                                        
                                    </div>
                                    <div id="Npc-'.$row->id_partida.'" class="content-panel-partida-content">
                                        Player
                                        
                                    </div>
                                    <div id="Item-'.$row->id_partida.'" class="content-panel-partida-content">
                                        Item
                                    </div>
                                    ';
                            echo'</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Footer content box -->
        <?php include "Public/layouts/footer.php";?>
    </body>
</html>
