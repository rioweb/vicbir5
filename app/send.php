<?php
if(isset($_POST["nombre"]) && isset($_POST["telefono"]) && isset($_POST["comentario"]) ){
$to = "contacto@rioweb.com.ar";
$subject = "Mensaje Enviado";
$contenido .= "Nombre: ".$_POST["nombre"]."\n";
$contenido .= "Email: ".$_POST["email"]."\n\n";
$contenido .= "Email: ".$_POST["telefono"]."\n\n";
$contenido .= "Email: ".$_POST["comentario"]."\n\n";
$header = "From: rioweb@eresselvaconsultoranatura.com\nReply-To:".$_POST["email"]."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
if(mail($to, $subject, $contenido ,$header)){
echo "Mail Enviado. Nos estaremos comunicando a la brevedad";
}
}
?>