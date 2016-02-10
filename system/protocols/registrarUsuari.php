<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    require_once('../Classes/usuari.php');
    
    $id =$_POST['TempId'];
    $name = $_POST['nom'];
    $surname = $_POST['cognoms'];
    $dni = $_POST['dni'];
    $direccio = $_POST['direccio'];
    $poblacio = $_POST['poblacio'];
    $provincia = $_POST['provincia'];
    $nacionalitat = $_POST['nacionalitat'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $data_naixement = $_POST['data_naixement'];
    
    if ($id !== "null"){
        
        $usuari = new Usuari($id, $name, $surname, $dni, $direccio, $poblacio, $provincia, $nacionalitat, $email, $telefon, $data_naixement);
        var_dump($usuari);
        $usuari->mod();
        header('Location: /usuaris.php');
    }else{
        
        $usuari = new Usuari($name, $surname, $dni, $direccio, $poblacio, $provincia, $nacionalitat, $email, $telefon, $data_naixement);
        var_dump($usuari);
        $usuari->add();
        header('Location: /usuaris.php');
    }
    
?>
