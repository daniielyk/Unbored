<?php
// tu_pagina_de_procesamiento.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se han enviado los datos mediante POST

    // Obtener los datos del formulario
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contraseña"];

    // Aquí puedes realizar las operaciones necesarias con los datos recibidos,
    // como verificar la información de inicio de sesión en una base de datos,
    // autenticar al usuario, etc.

    // Ejemplo de salida de los datos recibidos
    echo "Usuario: " . $usuario . "<br>";
    echo "Contraseña: " . $contrasena . "<br>";

    // Luego de procesar los datos, puedes redirigir a otra página si es necesario
    // header("Location: otra_pagina.php");
    // exit();

        // Redirigir a otra página HTML en la misma carpeta
        header("Location: inicio.html");
        exit();
        
}
?>