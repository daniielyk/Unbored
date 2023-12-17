<?php
// Conexión a la base de datos (reemplaza 'localhost', 'usuario', 'contraseña', 'basededatos' con tus propios datos)
$conexion = new mysqli('localhost', 'usuario', 'contraseña', 'basededatos');

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];

// Insertar la publicación en la base de datos
$sql = "INSERT INTO publicaciones (titulo, contenido) VALUES ('$titulo', '$contenido')";

if ($conexion->query($sql) === TRUE) {
    echo "Publicación agregada correctamente.";
} else {
    echo "Error al agregar la publicación: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
