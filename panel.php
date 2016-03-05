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
                        $Usuari_Partida = $Usuari_Partida->view_user($value['id_usuari']);
                        foreach ($Usuari_Partida as $row) {
                            $id_Partida = $row->id_partida;
                            
                                echo'<div id="partida-'.$id_Partida.'" class="content-panel-partida">';
                                    echo '<div class="content-panel-menu">';
                                        echo'<button value="'.$id_Partida.'" onclick="desEnemic(this);">Enemic</button>';
                                        echo'<button value="'.$id_Partida.'" onclick="desNpc(this);">Npc</button>';
                                        echo'<button value="'.$id_Partida.'" onclick="desItem(this);">Items</button>';
                                    echo'</div>';
                                    echo'<div id="Enemic-'.$id_Partida.'" class="content-panel-partida-content">';
                                        echo'<div class="rTable">'; 
                                            echo'<div class="rTableRow">'; 
                                                echo'<div class="rTableHead">Nom</div>'; 
                                                echo'<div class="rTableHead">Vida</div>'; 
                                                echo'<div class="rTableHead">Ataque</div>'; 
                                                echo'<div class="rTableHead">Arma</div>'; 
                                                echo'<div class="rTableHead">Defensa</div>';  
                                                echo'<div class="rTableHead">Armadura</div>'; 
                                                echo'<div class="rTableHead">Turno</div>';  
                                                echo'<div class="rTableHead">Poderes</div>';  
                                                echo'<div class="rTableHead">&nbsp;</div>'; 
                                                echo'<div class="rTableHead">&nbsp;</div>'; 
                                            echo'</div>';
                                            require_once(__DIR__.'/System/Classes/Partida_Enemigo.php');
                                            require_once(__DIR__.'/System/Classes/Enemigo.php');
                                            $Partida_Enemigo = new Partida_Enemigo();
                                            $Partida_Enemigo = $Partida_Enemigo->view_partida($id_Partida);
                                            $i = 0;
                                            foreach ($Partida_Enemigo as $row) {
                                                $Enemigo = new Enemigo();
                                                $Enemigo = $Enemigo->get_all($row->id_enemigo);
                                                if ( $i%2 == 0){
                                                    echo'<div class="rTableRow-0">';
                                                        echo'<div class="rTableCell">'.$Enemigo['nom'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Enemigo['vida'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Enemigo['ataque'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Enemigo['arma'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Enemigo['defensa'].'</div>';  
                                                        echo'<div class="rTableCell">'.$Enemigo['armadura'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Enemigo['turno'].'</div>';  
                                                        echo'<div class="rTableCell">'.$Enemigo['poderes'].'</div>';  
                                                        echo'<div class="rTableCell">&nbsp;</div>'; 
                                                        echo'<div class="rTableCell">&nbsp</div>';
                                                    echo'</div>';
                                                }else{
                                                    echo'<div class="rTableRow-1">';
                                                        echo'<div class="rTableCell">'.$Enemigo['nom'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Enemigo['vida'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Enemigo['ataque'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Enemigo['arma'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Enemigo['defensa'].'</div>';  
                                                        echo'<div class="rTableCell">'.$Enemigo['armadura'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Enemigo['turno'].'</div>';  
                                                        echo'<div class="rTableCell">'.$Enemigo['poderes'].'</div>';  
                                                        echo'<div class="rTableCell">&nbsp;</div>'; 
                                                        echo'<div class="rTableCell">&nbsp</div>';
                                                    echo'</div>';
                                                }
                                                $i++;
                                            }
                                        echo'</div>';
                                    echo'</div>';   
                                    echo'<div id="Npc-'.$id_Partida.'" class="content-panel-partida-content">';
                                        echo'<div class="rTable">'; 
                                            echo'<div class="rTableRow">'; 
                                                echo'<div class="rTableHead">Nom</div>'; 
                                                echo'<div class="rTableHead">Vida</div>'; 
                                                echo'<div class="rTableHead">Ataque</div>'; 
                                                echo'<div class="rTableHead">Arma</div>'; 
                                                echo'<div class="rTableHead">Defensa</div>';  
                                                echo'<div class="rTableHead">Armadura</div>'; 
                                                echo'<div class="rTableHead">Turno</div>';  
                                                echo'<div class="rTableHead">Poderes</div>';  
                                                echo'<div class="rTableHead">&nbsp;</div>'; 
                                                echo'<div class="rTableHead">&nbsp;</div>'; 
                                            echo'</div>';
                                            require_once(__DIR__.'/System/Classes/Partida_Player.php');
                                            require_once(__DIR__.'/System/Classes/Player.php');
                                            $Partida_Player = new Partida_Player();
                                            $Partida_Player = $Partida_Player->view_partida($id_Partida);
                                            $i = 0;
                                            foreach ($Partida_Player as $row) {
                                                $Player = new Player();
                                                $Player = $Player->get_all($row->id_player);
                                                if ( $i%2 == 0){
                                                    echo'<div class="rTableRow-0">';
                                                        echo'<div class="rTableCell">'.$Player['nom'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Player['vida'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Player['ataque'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Player['arma'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Player['defensa'].'</div>';  
                                                        echo'<div class="rTableCell">'.$Player['armadura'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Player['turno'].'</div>';  
                                                        echo'<div class="rTableCell">'.$Player['poderes'].'</div>';  
                                                        echo'<div class="rTableCell">&nbsp;</div>'; 
                                                        echo'<div class="rTableCell">&nbsp</div>';
                                                    echo'</div>';
                                                }else{
                                                    echo'<div class="rTableRow-1">';
                                                        echo'<div class="rTableCell">'.$Player['nom'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Player['vida'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Player['ataque'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Player['arma'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Player['defensa'].'</div>';  
                                                        echo'<div class="rTableCell">'.$Player['armadura'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Player['turno'].'</div>';  
                                                        echo'<div class="rTableCell">'.$Player['poderes'].'</div>';  
                                                        echo'<div class="rTableCell">&nbsp;</div>'; 
                                                        echo'<div class="rTableCell">&nbsp</div>';
                                                    echo'</div>';
                                                }
                                                $i++;
                                            }
                                        echo'</div>';
                                    echo'</div>';   
                                    echo'<div id="Item-'.$id_Partida.'" class="content-panel-partida-content">';
                                        echo'<div class="rTable">'; 
                                            echo'<div class="rTableRow">'; 
                                                echo'<div class="rTableHead">Nom</div>'; 
                                                echo'<div class="rTableHead">Descripció</div>';   
                                                echo'<div class="rTableHead">&nbsp;</div>'; 
                                                echo'<div class="rTableHead">&nbsp;</div>'; 
                                            echo'</div>';
                                            require_once(__DIR__.'/System/Classes/Partida_Item.php');
                                            require_once(__DIR__.'/System/Classes/Item.php');
                                            $Partida_Item = new Partida_Item();
                                            $Partida_Item = $Partida_Item->view_partida($id_Partida);
                                            $i = 0;
                                            foreach ($Partida_Item as $row) {
                                                $Item = new Item();
                                                $Item = $Item->get_all($row->id_item);
                                                if ( $i%2 == 0){
                                                    echo'<div class="rTableRow-0">';
                                                        echo'<div class="rTableCell">'.$Item['nom'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Item['descripcio'].'</div>';  
                                                        echo'<div class="rTableCell">&nbsp</div>'; 
                                                        echo'<div class="rTableCell">&nbsp</div>';
                                                    echo'</div>';
                                                }else{
                                                    echo'<div class="rTableRow-1">';
                                                        echo'<div class="rTableCell">'.$Item['nom'].'</div>'; 
                                                        echo'<div class="rTableCell">'.$Item['descripcio'].'</div>';  
                                                        echo'<div class="rTableCell">&nbsp;</div>'; 
                                                        echo'<div class="rTableCell">&nbsp</div>';
                                                    echo'</div>';
                                                }
                                                $i++;
                                            }
                                        echo'</div>';
                                    echo'</div>';
                                echo'</div>';
                        }
                        echo'</div>';
                    ?>
                </div>
            </div>
        </div>
        <!-- Footer content box -->
        <?php include "Public/layouts/footer.php";?>
    </body>
</html>
