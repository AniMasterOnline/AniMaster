<?php
    include "../Errors.php";
    require_once('../Classes/Enemigo.php');
    require_once('../Classes/Partida_Enemigo.php');
    
    $id_enemigo = $_POST['TempDel'];
    
    
    $Partida_Enemigo = new Partida_Enemigo();
    $Partida_Enemigo->delete($id_enemigo);
    $Enemigo = new Enemigo();
    $Enemigo->delete($id_enemigo);
        
    echo 'Enemic Eliminat Correctament!!';
    header('Location: ../../panel.php');
?>