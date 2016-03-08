<style>
    #debug{
        position: fixed;
        right: 1px;
        bottom: 1px;
        background-color: rgba(60,60,60,0.7);
        padding: 4px;
        color: #fff;
        border: 1px;
        border-color: black;
        border-style: solid;
        z-index: 1;
    }
</style>
<?php
$opc = false;
if($opc){
    if (!ini_get('display_errors')) {
        ini_set('display_errors', '1');
    }
    echo'<div id="debug">Debug : <b>On</b></div>';
}
?>

