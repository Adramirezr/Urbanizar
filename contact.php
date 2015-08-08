<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tele = $_POST['tele']
$mensaje = $_POST['mensaje'];
$para = 'andres.ramirez@neurobrand.co, contacto@neurobrand.co';
$titulo = 'NeuroBrand';
$header = 'From: ' . $email;
$msjCorreo = "Hola mi nombre es $nombre\neste es mi correo $email\ny quería deciles $mensaje\nmi telefono es $tele\n";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'index.html';
</script>";
} else {
echo 'Falló el envio';
}
}
?>
