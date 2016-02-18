<?php
$opc = true;
if($opc){
    if (!ini_get('display_errors')) {
        ini_set('display_errors', '1');
    }
    echo'<div id="debug">Debug : <b>On</b></div>';
}
?>

