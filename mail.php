<?php
$titulo = 'Enviando email desde PHP';
$mensaje = 'Este es el primer email\r\nque envío desde PHP';
$para = 'DaarkAssassin@hotmail.es';
$enviado = mail($para, $titulo, $mensaje);
if ($enviado){
     echo 'Email enviado correctamente';
}else{
   echo 'Error en el envio del email'; 
}
  

?>

