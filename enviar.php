<?php

$destino = "pelisenp4@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["email"];
$telefono = $_POST["tel"];
$mensaje = $_POST["codigo"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nTeléfono: " . $telefono . "\nCodigo: " . $mensaje;

mail($destino, "Contacto", $contenido);
header("Location:index.html")

?>
