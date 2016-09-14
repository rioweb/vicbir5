<?php
if(isset($_POST["nombre"]) && isset($_POST["comentario"])]) ){
$to = "contacto@victoriabirchner.com.ar";
$subject = "Mensaje Enviado";
$contenido .= "Nombre: ".$_POST["nombre"]."\n";
$contenido .= "Email: ".$_POST["email"]."\n\n";
$contenido .= "Email: ".$_POST["comentario"]."\n\n";
$contenido .= "Email: ".$_POST["telefono"]."\n\n";
$contenido .= "Email: ".$_POST["ciudad"]."\n\n";
$header = "From: contacto@victoriabirchner.com.ar\nReply-To:".$_POST["email"]."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
if(mail($to, $subject, $contenido ,$header)){
echo "Mail Enviado. Nos estaremos comunicando a la brevedad";
}
}
?>