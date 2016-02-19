<?php
    include "../Errors.php";
    require_once('../Classes/usuari.php');
    
    $newUser = $_POST['TempUser'];
    $newPass = md5($_POST['TempPassword']);
    $newPass2 = md5($_POST['TempRepeatPassword']);
    $newEmail = $_POST['TempEmail'];
    $newTelefon = $_POST['TempTelefon'];
    
    
    $usuari = new Usuari();
    
    $flag0 = true;
    if($newPass == $newPass2){
        $flag0 = false;
    }
    $flag1 = $usuari->test1($newUser);
    $flag2 = $usuari->test2($newEmail);
    $flag3 = $usuari->test3($newTelefon);
    
    if($flag0 || $flag1 || $flag2 || $flag3){
        echo'<div><center>';
        echo"<h2>Error Al crear L'usuari</h2>";
        if($flag0){
            echo '- Les contrasenyes no coincideixen!! <br>';
        }
        if($flag1){
            echo '- Aquest Usuari no esta disponible!! <br>';
        }
        if($flag2){
            echo '- Aquest Email ja esta registrat!! <br>';
        }
        if($flag3){
            echo '- Aquest Telefon ja esta en us!! <br>';
        }
        echo '<br><form><input type="button" value="Torna atras" name="Torna atras" onclick="history.back()" /></form>';
        echo'</center></div>';
    }else{
        //Afegir Usuari a la BD.
        $newUsuari = new Usuari($newUser, $newPass, $newEmail, $newTelefon);
        $newUsuari->add();
        echo 'Usuari afegit Correctament!!';
        
        //Iniciar sessió amb el nou usuari. 
        $usuari = $usuari->verificar_login($newUser,$newPass);
        if(!isset($_SESSION['usuari'])){
            if( $usuari != null){ 
                session_start();
                $_SESSION['usuari'] = $usuari;
                header('Location: ../../panel.php');

            } 
        }
    }
?>