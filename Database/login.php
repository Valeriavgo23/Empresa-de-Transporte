<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


include 'conexionUser.php'; 

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$tipo_usuario = $_POST['tipo_usuario'];

$sql = "INSERT INTO usuarios (correo, contraseña, tipo_usuario)
        VALUES ('$correo', '$contraseña', '$tipo_usuario')";

if (mysqli_query($conexion, $sql)) {
        header("Location: ../inicioSesion.html");
        exit();
} else {
        echo "❌ Error al crear usuario: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>