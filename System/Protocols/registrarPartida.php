<?php
    include "../Errors.php";
    require_once('../Classes/Partida.php');
    require_once('../Classes/Usuari_Partida.php');
    
    $newId_Usuari = $_POST['TempId_usuari'];
    $newTitol = $_POST['TempTitol'];
    $newDescripcio = $_POST['TempDescripcio'];
    $newAny_partida = $_POST['TempAny_partida'];
    $newNivel_sobrenatural = $_POST['TempNivel_sobrenatural'];
    $newJoc = isset($_POST["TempJoc"]) ? $_POST["TempJoc"] : "";
    $newMaster = "0";
    $newPartida = new Partida($newTitol, $newDescripcio, $newAny_partida, $newNivel_sobrenatural, $newJoc);
    
    if($newPartida->get_id() == null){
        $newPartida->add();
        
        $newId_Partida = $newPartida->get_id();
    
        $Usuari_Partida = new Usuari_Partida($newId_Usuari, $newId_Partida['id_partida'], $newMaster);
        $Usuari_Partida->add();
        
        echo 'Partida creada Correctament!!';
        header('Location: ../../panel.php');
    }else{
        echo'Error';
    }
    
?>