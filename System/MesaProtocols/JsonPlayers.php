<?php 
require_once('../Classes/Partida_Player.php');
require_once('../Classes/Player.php');
$id_Partida = $_POST['TempIdPartida'];
$Partida_Player = new Partida_Player();
$Partida_Player = $Partida_Player->view_partida($id_Partida);
$rtn = array();
foreach ($Partida_Player as $row) {
    $Player = new Player();
    $Player = $Player->get_all($row->id_player);
    array_push($rtn, $Player);
}
$json = json_encode( (array)$rtn );
echo $json;
?>