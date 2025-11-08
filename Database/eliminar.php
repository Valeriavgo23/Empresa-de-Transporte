<?php
include('conexion.php');
$id = $_GET['id'];
$sql = "DELETE FROM sistema_cotizar WHERE id=$id";
$conn->query($sql);
header("Location: mostrar.php");
?>