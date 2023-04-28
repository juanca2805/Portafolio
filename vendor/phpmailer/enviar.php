<?php
// use PHPMailer/PHPMailer/PHPMailer;
if (isset($_POST['enviar'])) {
    if(!empty($_POST (['nombre']) ));
}
$destino="gasaiyuno2808@gmail.com";
$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];
$asunto=$_POST["asunto"];
$mensaje=$_POST["mensaje"];
$contenido= "Nombre: ".$nombre ."\nTelefono: " .$telefono . "\nCorreo:" .$correo ."\nAsunto:" .$asunto ."\nMensaje:" .$mensaje;
$header="Reply-To: gasaiyuno2808Qgmail.com" ."\r\n";
$header= "X-Mailer: PHP/". phpversion();
$mail= @mail ($destino,$asunto,$contenido);
if($mail){
echo header("Location:gracias.html");
}




?>