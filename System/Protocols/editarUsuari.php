<!DOCTYPE html>
<html>
    <head>
	
	    <title>Gestor Usuaris</title>
        <link rel="shortcut icon" href="public/images/un-libro1.png">
        <link href="../../Public/main.css" rel="stylesheet">
        
    </head>
    <body>
        <?php include "../../Layouts/menu.php";?>
        <?php
            error_reporting(E_ALL);
            ini_set('display_errors', '1');
            $TempId = $_POST['tempId'];
            $TempNom = $_POST['tempNom'];
            $TempCognom = $_POST['tempCognom'];
            $TempDni = $_POST['tempDni'];
            $TempDireccio = $_POST['tempDireccio'];
            $TempPoblacio = $_POST['tempPoblacio'];
            $TempProvincia = $_POST['tempProvincia'];
            $TempNacionalitat= $_POST['tempNacionalitat'];
            $TempEmail = $_POST['tempEmail'];
            $TempTelefon = $_POST['tempTelefon'];
            $TempData_Naixement = $_POST['tempData_Naixement'];
        ?>
        <br><br><br><br><br><br>
        <div id="content">
            <center>
                <h2>Modificar un Usuari</h2>
                <br><br>
                <form id="registre" method="post" action="registrarUsuari.php">
                    <?php
                        echo '<input type="hidden" name="TempId"       value="'.$TempId.'" class="form_cell">';
                        echo 'Nom:<br>            <input type="text"   name="nom"            value="'.$TempNom.'" class="form_cell"  required><br><br>';
                        echo 'Cognoms:<br>        <input type="text"   name="cognoms"        value="'.$TempCognom.'" class="form_cell"  required><br><br>';
                        echo 'Dni:<br>            <input type="text"   name="dni"            value="'.$TempDni.'" class="form_cell"  required><br><br>';
                        echo 'Direccio:<br>       <input type="text"   name="direccio"       value="'.$TempDireccio.'" class="form_cell"  required><br><br>';
                        echo 'Poblacio:<br>       <input type="text"   name="poblacio"       value="'.$TempPoblacio.'" class="form_cell"  required><br><br>';
                        echo 'Provincia:<br>      <input type="text"   name="provincia"      value="'.$TempProvincia.'" class="form_cell"  required><br><br>';
                        echo 'Nacionalitat:<br>   <input type="text"   name="nacionalitat"   value="'.$TempNacionalitat.'" class="form_cell"  required><br><br>';
                        echo 'Email:<br>          <input type="text"   name="email"          value="'.$TempEmail.'" class="form_cell"  required><br><br>';
                        echo 'Telefon:<br>        <input type="number" name="telefon"        value="'.$TempTelefon.'" class="form_cell"  required><br><br>';
                        echo 'Data_Naixement:<br> <input type="date"   name="data_naixement" value="'.$TempData_Naixement.'" class="form_cell"  required><br><br>';
                    ?>
                    <br><br>
                    <input class="boton lateral" type="submit" value="Modifica" name="enviar" style="width:30%"/>
                    
                </form>
            </center>
        </div>
        <br><br>
    </body>
</html>
