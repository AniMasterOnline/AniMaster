<?php
    include "../Errors.php";
    require_once('../Classes/Item.php');
    require_once('../Classes/Partida_Item.php');
    
    $id_item = $_POST['TempDel'];
    
    
    $Partida_Item = new Partida_Item();
    $Partida_Item->delete($id_item);
    $Item = new Item();
    $Item->delete($id_item);
        
    echo 'Item Eliminat Correctament!!';
    header('Location: ../../panel.php');
?>
