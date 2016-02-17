<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    require_once('../Classes/usuari.php');
    
    $newUser = $_POST['TempUser'];
    $testUser = strtolower($newUser);
    $newPass = $_POST['TempPassword'];
    $newEmail = $_POST['TempEmail'];
    $newTelefon = $_POST['TempTelefon'];
    
    $usuari = new Usuari();
    $usuari = $usuari->view_all();
    $msg = "";
    $fail = false;
    foreach($usuari as $obj):
        $user = strtolower($obj->getUser());
        $email = $obj->getEmail();
        $telefon = $obj->getTelefon();
        
        if ($user == $testUser){
            $fail = true;
            $msg = $msg + "L'usuari ja existeix! \n";
        }else if($email == $newEmail){
            $fail = true;
            $msg = $msg + "Aquest email ja esta en us! \n";
        }else if($email == $newEmail){
            $fail = true;
            $msg = $msg + "El telefon introduit ja esta registrat! \n";
        }
    endforeach;
    
    if($fail){
        //echo '<script language="javascript">alert("'.$msg.'");</script>';
        header('Location: ../../signup.php');
        echo"$msg";
        
        
    }else{
        $newUsuari = new Usuari($newUser, $newPass, $newEmail, $newTelefon);
        //var_dump($usuari);
        $newUsuari->add();
        echo 'Usuari afegit Correctament!!';
        header('Location: ../../login.php'); 
    }
?>