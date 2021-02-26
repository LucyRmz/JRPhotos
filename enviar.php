<?php
/*Archivo para enviar datos del formulario de contacto*/

    //Llamando a los campos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    //Contenido del correo
    $destino = "lucy.lrmz@gmail.com";
    $asunto = "JorgeRamirezPhotos Contacto";
    $datos = "Nombre: ". $nombre . "\nCorreo: ". $correo . "\nTelefono: ". $telefono . "\nMensaje: " . $mensaje;

    //Enviando Mensaje
    mail($destino, $asunto, $datos);
    header("Location:contacto.html");

?>