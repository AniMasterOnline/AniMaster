<!DOCTYPE html>
<html>
    <head>
	<title>Gestor Biblioteca</title>
        <link rel="shortcut icon" href="../../Public/Images/un-libro1.png">
        <link href="../../Public/main.css" rel="stylesheet">
        
    </head>
    <body>
        <?php include "../../Layouts/menu.php";?>
        <br><br><br><br><br><br>
        <div id="content">  
            <br>
                <?php
                    require_once('../Classes/Usuari.php');
                    $TempId = $_POST['tempId'];
                    $TempConfirmacio = $_POST['tempConfirmacio'];
                    //var_dump($TempConfirmacio);
                    if($TempConfirmacio === "si"){
                        $Eliminar = new Usuari;
                        $Eliminar->delete($TempId);
                        header('Location: /index.php');  
                    }else{
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
                        echo "<div class='taula'>";
                            echo "<div class='celda'><b>NOM</b></div>";
                            echo "<div class='celda'><b>COGNOMS</b></div>";
                            echo "<div class='celda'><b>DNI</b></div>";
                            echo "<div class='celda'><b>DIRECCIO</b></div>";
                            echo "<div class='celda'><b>POBLACIO</b></div>";
                            echo "<div class='celda'><b>PROVINCIA</b></div>";
                            echo "<div class='celda'><b>NACIONALITAT</b></div>";
                            echo "<div class='celda'><b>EMAIL</b></div>";
                            echo "<div class='celda'><b>TELEFON</b></div>";
                            echo "<div class='celda'><b>DATA_NAIXEMENT</b></div>";
                                echo "<div class='fila1'>";
                                    echo "<div class='celda'>";
                                        echo $TempNom;
                                    echo "</div>";
                                    echo "<div class='celda'>";
                                        echo $TempCognom;
                                    echo "</div>";
                                    echo "<div class='celda'>";
                                        echo $TempDni;
                                    echo "</div>";
                                    echo "<div class='celda'>";
                                        echo $TempDireccio;
                                    echo "</div>";
                                    echo "<div class='celda'>";
                                        echo $TempPoblacio;
                                    echo "</div>";
                                    echo "<div class='celda'>";
                                        echo $TempProvincia;
                                    echo "</div>";
                                    echo "<div class='celda'>";
                                        echo $TempNacionalitat;
                                    echo "</div>";
                                    echo "<div class='celda'>";
                                        echo $TempEmail;
                                    echo "</div>";
                                    echo "<div class='celda'>";
                                        echo $TempTelefon;
                                    echo "</div>";
                                    echo "<div class='celda'>";
                                        echo $TempData_Naixement;
                                    echo "</div>";
                                echo "</div>";
                            echo"</div>";
                            echo "<div class='taula2'>";
                                echo "<div class='fila1'>";
                                    echo "<div class='celda'>";
                                    echo "Eliminar?";
                                    echo "</div>";
                                    echo "<div class='celda'>";
                                    echo "<form method='POST' action='eliminarUsuari.php' name='idForm2'>";
                                    echo "<input type='hidden' name='tempId' value='".$TempId."' />";
                                    echo "<input type='hidden' name='tempConfirmacio' value='si' />";
                                    echo "<div align='center'><input class='buttonRed' type='submit' value='SI' name='Back2'/></div></form>";
                                    echo "</div>";
                                    echo "<div class='celda'>";
                                    echo" <form> <div align='center'><input class='buttonBlue' type='button' value='NO' name='Back2' onclick='history.back()' /></div></form>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                    }
                ?>
        </div>
        <br>
    </body>
</html>