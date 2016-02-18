<?php
    include "../Errors.php";
    require_once('../Classes/usuari.php');
    
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $logn = $_POST['login'];
    $usuari = new Usuari();
    $usuari = $usuari->verificar_login($user,$pass);
    if(!isset($_SESSION['user_id'])){ 
        if(isset($logn)){
            if( $usuari != null){ 
                /*Si el login fue correcto, registramos la variable de sesión*/
                session_start();
                $_SESSION['user_id'] = $usuari;
                //var_dump($usuari);
                //echo '<br><br>';
                //echo '<br><form><input type="button" value="Torna atras" name="Torna atras" onclick="history.back()" /></form>';
                header('Location: ../../index.php');
                
            } 
            else{
                echo '<br><center><div><h3>Su usuario es incorrecto, intente nuevamente.</h3></div></center>'; //Si la función verificar_login() no pasa, que se muestre un mensaje de error. 
            } 
        }
    }
