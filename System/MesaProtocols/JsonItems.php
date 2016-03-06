<?php 
require_once('../Classes/Partida_Item.php');
require_once('../Classes/Item.php');
$id_Partida = $_POST['TempIdPartida'];
$Partida_Item = new Partida_Item();
$Partida_Item = $Partida_Item->view_partida($id_Partida);
$rtn = array();
foreach ($Partida_Item as $row) {
    $Item = new Item();
    $Item = $Item->get_all($row->id_item);
    array_push($rtn, $Item);
}
$json = json_encode( (array)$rtn );
echo $json;
?>