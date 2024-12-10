<?php

$nombre = $_POST['txt_nombre'];
$email = $_POST['txt_e_mail'];
$mensaje = $_POST['txt_mensaje'];

$cuerpo = "Nuevo contacto en Jose Ramirez V. y Cia Ltda \n";
$cuerpo .= "================================= \n";
$cuerpo .= "Nombre: " . $nombre . "\n";
$cuerpo .= "Email: " . $email . "\n";
$cuerpo .= "Mensaje: " . $mensaje . "\n";


mail("pramirez@joseramirez.cl", "Jrv CONTACT", $cuerpo, "From: jrv@CONTACTO");
echo '<div id="gracias" style="width:500px; border:1px solid #666;  background:#e5e5e5; height: 100px">
<span style="display:block; padding: 60px; font-family: Verdana, Geneva, sans-serif; font-size: 18px; color:#300; text-align: center;">Su Mensaje fue enviado correctamente. <br>
Gracias por contactarse con Nosotros.</span>
</div> ';
echo '<META HTTP-EQUIV="refresh" CONTENT="2; url=http://www.joseramirez.cl">';

?>