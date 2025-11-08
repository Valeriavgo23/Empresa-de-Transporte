<?php
$servername = "localhost";
$username = "root";
$password = "loveyluna";
$database = "sistema_cotizar";

$conexion = new mysqli($servername, $username, $password, $database);


if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}