<?php
    $destinatario = 'seoandweb@gmail.com';
    //Esto es al correo al que se enviará el mensaje
    $nombre = $_POST['nombre'];
    $asunto = $_POST['apellidos'];
    $empresa = $_POST['empresa'];
    $email = $_POST['email'];

    $header = "Enviado desde la Landing Page de SEO & WEB";
    $mensajeCompleto = $empresa . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $email, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";


?>  