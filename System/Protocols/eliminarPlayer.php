<?php
    include "../Errors.php";
    require_once('../Classes/Player.php');
    require_once('../Classes/Partida_Player.php');
    
    $id_player = $_POST['TempDel'];
    
    
    $Partida_Player = new Partida_Player();
    $Partida_Player->delete($id_player);
    $Player = new Player();
    $Player->delete($id_player);
        
    echo 'Player Eliminat Correctament!!';
    header('Location: ../../panel.php');
?>