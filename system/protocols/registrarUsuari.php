<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    require_once('../Classes/usuari.php');
    
    $newUser = $_POST['TempUser'];
    $newPass = $_POST['TempPassword'];
    $newPass2 = $_POST['TempRepeatPassword'];
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
        $newUsuari = new Usuari($newUser, $newPass, $newEmail, $newTelefon);
        //var_dump($usuari);
        $newUsuari->add();
        echo 'Usuari afegit Correctament!!';
        header('Location: ../../login.php'); 
    }
?>