<?php
    include "../Errors.php";
    require_once('../Classes/Enemigo.php');
    require_once('../Classes/Partida_Enemigo.php');
    
    $newId_Partida = isset($_POST["TempId_Partida"]) ? $_POST["TempId_Partida"] : "";
    
    $newNom = $_POST['TempNom'];
    $newVida = $_POST['TempVida'];
    $newAtaque = $_POST['TempAtaque'];
    $newArma = $_POST['TempArma'];
    $newDefensa = $_POST['TempDefensa'];
    $newArmadura = $_POST['TempArmadura'];
    $newTurno = $_POST['TempTurno'];
    $newPoderes = $_POST['TempPoderes'];
    
    $newEnemigo = new Enemigo($newNom, $newVida, $newAtaque, $newArma, $newDefensa, $newArmadura, $newTurno, $newPoderes);
    
    if(isset($_POST["TempId_Partida"]) && $newEnemigo->get_id() == null){
        $newEnemigo->add();
        
        $newId_Enemigo = $newEnemigo->get_id();
        //var_dump($newId_Enemigo);
        
        $Partida_Enemigo = new Partida_Enemigo($newId_Enemigo['id_enemigo'], $newId_Partida);
        $Partida_Enemigo->add();
        
        echo 'Enemic creat Correctament!!';
        header('Location: ../../panel.php');
    }else{
        echo'Error';
    }
    
?>