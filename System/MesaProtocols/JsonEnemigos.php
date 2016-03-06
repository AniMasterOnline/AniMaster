<?php 
require_once('../Classes/Partida_Enemigo.php');
require_once('../Classes/Enemigo.php');
$id_Partida = $_POST['TempIdPartida'];
$Partida_Enemigo = new Partida_Enemigo();
$Partida_Enemigo = $Partida_Enemigo->view_partida($id_Partida);
$rtn = array();
foreach ($Partida_Enemigo as $row) {
    $Enemigo = new Enemigo();
    $Enemigo = $Enemigo->get_all($row->id_enemigo);
    array_push($rtn, $Enemigo);
}
$json = json_encode( (array)$rtn );
echo $json;
?>