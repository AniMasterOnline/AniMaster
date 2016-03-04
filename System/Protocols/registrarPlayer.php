<?php
    include "../Errors.php";
    require_once('../Classes/Player.php');
    require_once('../Classes/Partida_Player.php');
    
    $newId_Partida = $_POST['TempId_Partida'];
    
    $newNom = $_POST['TempNom'];
    $newVida= $_POST['TempVida'];
    $newAtaque= $_POST['TempAtaque'];
    $newArma= $_POST['TempArma'];
    $newDefensa= $_POST['TempDefensa'];
    $newArmadura= $_POST['TempArmadura'];
    $newTurno= $_POST['TempTurno'];
    $newPoderes= $_POST['TempPoderes'];
    
    $newPlayer = new Player($newNom, $newVida, $newAtaque, $newArma, $newDefensa, $newArmadura, $newTurno, $newPoderes);
    
    if($newPlayer->get_id() == null){
        $newPlayer->add();
        
        $newId_Player = $newPlayer->get_id();
        var_dump($newId_Player);
        
        $Partida_Player = new Partida_Player($newId_player['id_player'], $newId_partida);
        $Partida_Player->add();
        
        echo 'Partida creada Correctament!!';
        //header('Location: ../../panel.php');
    }else{
        echo'Error';
    }
    
?>