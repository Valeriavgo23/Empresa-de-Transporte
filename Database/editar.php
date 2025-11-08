<!--Archivo html-->
<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminal de Transporte</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos2.css">
    <style>
        .card:hover {
            transform: translateY(-10px);
            transition: transform 0.3s;
        }
    </style>
</head>
<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">🚍 Terminal Jardín</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="../paginaWeb/index.html">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="../paginaWeb/empresas.html">Empresas</a></li>
                    <li class="nav-item"><a class="nav-link" href="../paginaWeb/tiposDeVehiculos.html">Vehículos</a></li>
                    <li class="nav-item"><a class="nav-link" href="../paginaWeb/horarios.html">Horarios</a></li>
                    <li class="nav-item"><a class="nav-link" href="../paginaWeb/cotizar.html">Compra</a></li>
                </ul>
            </div>
        </div>
    </nav>
<body>


<?php
include('conexion.php');

$id = $_GET['id'];
$sql = "SELECT * FROM sistema_cotizar WHERE id=$id";
$result = $conn->query($sql);
$fila = $result->fetch_assoc();

if(isset($_POST['actualizar'])){
$nombre = $_POST['nombre'];
$vehiculo = $_POST['vehiculo'];
$servicio = $_POST['servicio'];
$tipo = $_POST['tipo'];
$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha = $_POST['fecha'];
$precio = $_POST['precio'];

$update = "UPDATE sistema_cotizar SET nombre='$nombre', vehiculo='$vehiculo', servicio='$servicio', tipo='$tipo', origen='$origen', destino='$destino', fecha='$fecha', precio='$precio' WHERE id=$id";
$conn->query($update);
header("Location: mostrar.php");
}
?>

<form method="POST">
Nombre: <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>"><br>
Vehículo: <input type="text" name="vehiculo" value="<?php echo $fila['vehiculo']; ?>"><br>
Servicio: <input type="text" name="servicio" value="<?php echo $fila['servicio']; ?>"><br>
Tipo: <input type="text" name="tipo" value="<?php echo $fila['tipo']; ?>"><br>
Origen: <input type="text" name="origen" value="<?php echo $fila['origen']; ?>"><br>
Destino: <input type="text" name="destino" value="<?php echo $fila['destino']; ?>"><br>
Fecha: <input type="date" name="fecha" value="<?php echo $fila['fecha']; ?>"><br>
Precio: <input type="number" name="precio" value="<?php echo $fila['precio']; ?>"><br>
<input type="submit" name="actualizar" value="Actualizar">
</form>
<!--Boton para volver al inicio-->
<form action="../cotizar.html">
    <button type="submit" class="btn btn-primary w-60">Volver al inicio</button>
</form>
</form>
</body>
    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-4 mt-5">
        <p>© 2025 Terminal de Transporte Ciudad Jardín | Todos los derechos reservados</p>
        <p>📍 Av. Libertad #500 | 📞 (601) 555-1212</p>
    </footer>
</footer>


