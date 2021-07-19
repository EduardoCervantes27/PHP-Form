<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario</title>
</head>
<body>
    <form action="correo.php" method="POST">
        <div class="contenido-form">
            <!--Campo de nombre-->
            <label for="name">Nombre:</label>
            <input type="text" name="name" placeholder="Nombre Completo...">
            <!--Campo de email-->
            <label for="email">E-mail:</label>
            <input type="text" name="email" placeholder="E-mail...">
            <!--Campo de mensage-->
            <label for="msg">Mensage:</label>
            <textarea name="msg" cols="30" rows="10" placeholder="Mensaje..."></textarea>
            <!--Botón Enviar-->
            <input type="submit" value="Enviar" name="enviar">
        </div>
    </form>
</body>
</html>

<?php
include("correo.php");
?>