<!-- Archivo html-->
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
                    <li class="nav-item"><a class="nav-link active" href="index.html">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="empresas.html">Empresas</a></li>
                    <li class="nav-item"><a class="nav-link" href="tiposDeVehiculos.html">Vehículos</a></li>
                    <li class="nav-item"><a class="nav-link" href="horarios.html">Horarios</a></li>
                    <li class="nav-item"><a class="nav-link" href="cotizar.html">Compra</a></li>
                </ul>
            </div>
        </div>
    </nav>
<body>


<?php
include ('conexion.php');

$sql = "SELECT * FROM sistema_cotizar";
$resultado = $conn->query($sql);
?>

<h2>Listado de Cotizaciones</h2>
<table border="1">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Vehículo</th>
    <th>Servicio</th>
    <th>Tipo</th>
    <th>Origen</th>
    <th>Destino</th>
    <th>Fecha</th>
    <th>Precio</th>
    <th>Acciones</th>
</tr>

<?php while($fila = $resultado->fetch_assoc()) { ?>
    <tr>
    <td><?php echo $fila['id']; ?></td>
    <td><?php echo $fila['nombre']; ?></td>
    <td><?php echo $fila['vehiculo']; ?></td>
    <td><?php echo $fila['servicio']; ?></td>
    <td><?php echo $fila['tipo']; ?></td>
    <td><?php echo $fila['origen']; ?></td>
    <td><?php echo $fila['destino']; ?></td>
    <td><?php echo $fila['fecha']; ?></td>
    <td><?php echo $fila['precio']; ?></td>
    <td>
    <a href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a>
    <a href="eliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
    </td>
</tr>
</body>
<?php } ?>
</table>
<!--Boton para volver al inicio-->
<form action="/cotizar.html">
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


