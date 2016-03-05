<?php
    include "../Errors.php";
    require_once('../Classes/Item.php');
    require_once('../Classes/Partida_Item.php');
    
    $newId_Partida = isset($_POST["TempId_Partida"]) ? $_POST["TempId_Partida"] : "";
    
    $newNom = $_POST['TempNom'];
    $newDescripcio= $_POST['TempDescripcio'];
    
    $newItem = new Item($newNom, $newDescripcio);
    
    if(isset($_POST["TempId_Partida"]) && $newItem->get_id() == null){
        $newItem->add();
        
        $newId_Item = $newItem->get_id();
        
        $Partida_Item = new Partida_Item($newId_Item['id_item'], $newId_Partida);
        $Partida_Item->add();
        
        echo 'Item creat Correctament!!';
        header('Location: ../../panel.php');
    }else{
        echo'Error';
    }
    
?>