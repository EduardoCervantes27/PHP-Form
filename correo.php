<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['msg'])){
        $nombre = $_POST['name'];
        $email = $_POST['email'];
        $mensaje = $_POST['msg'];

        $header = "From: " . $email . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";

        $mensajeCompleto = "Mensaje enviado por: " . $nombre . "\r\n";
        $mensajeCompleto .= "Su E-mail es: " . $email . "\r\n";
        $mensajeCompleto .= "Mensaje: " . $mensaje . "\r\n";
        $mensajeCompleto .= "Enviado el: " . date('d/m/Y', time());

        $para = "luis_edu_cj@hotmail.com";
        $asunto = "Asunto del mensaje";

        mail($para, $asunto, utf8_decode($mensaje), $header);

        header("Location: index.php");
    }
}