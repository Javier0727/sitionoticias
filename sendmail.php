<?php
    $remitente ="buzon@i19.com.mx";
    $destinatario = $_POST['email'];
    $asunto ="Buzon 19.com.mx";
    $mensaje ="Recibimos tu comentario, en breve nos pondremos en contacto contigo.";
    $encabezado ='MIME-Version: 1.0' . "\r\n";
    $encabezado .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($remitente,$asunto,$mensaje,$encabezado);

$mensaje2 = "Este mensaje lo envió: ";
$mensaje2 .= $_POST['name'];
$mensaje2 .= "<br> Con este contenido: <br>";
$mensaje2 .= $_POST['message'];
$mensaje2 .= "<br> Y este es su correo de contacto: ";
$mensaje2 .= $_POST['email'];
// mail("Correo@i19.com.mx", "Buzon de i19",$mensaje2);
header('Location: index.php');
?>