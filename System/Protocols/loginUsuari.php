<?php
    include "../Errors.php";
    require_once('../Classes/usuari.php');
    $usuari = new Usuari();
    
    if(!isset($_SESSION['userid'])){ 
        if(isset($_POST['login'])){ 
            if($usuari->verificar_login($_POST['user'],$_POST['pass'],$result) == 1){ 
                /*Si el login fue correcto, registramos la variable de sesión*/
                $_SESSION['userid'] = $result->idusuario;
                header('Location: ../../index.php');
            } 
            else{ 
                echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>'; //Si la función verificar_login() no pasa, que se muestre un mensaje de error. 
            } 
        }
    }
