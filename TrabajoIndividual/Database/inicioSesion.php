<?php
include('conexionUser.php');

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$correo = trim($_POST['correo']);
$contraseña = trim($_POST['contraseña']);

$consulta = "SELECT * FROM usuarios WHERE correo='$correo' AND contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    $usuario = mysqli_fetch_assoc($resultado);

    if ($usuario['tipo_usuario'] == 'administrador') {
        header("Location: ../cotizar.html");
    } elseif ($usuario['tipo_usuario'] == 'cliente') {
        header("Location: ../cotizarCliente.html");
    } else {
        header("Location: ../invitado.html");
    }
} else {
    echo "Usuario o contraseña incorrectos.";
}
$resultado = mysqli_query($conexion, "SELECT DATABASE() AS base;");
$fila = mysqli_fetch_assoc($resultado);
echo "Base de datos actual: " . $fila['base'];



mysqli_close($conexion);
?>

