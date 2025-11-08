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

<?php include 'conexion.php';
//Llamar a la conexión
//echo "Archivo de conexión cargado correctamente. <br>";

//recibir los datos del formulario
$fecha = $_POST['fecha'];
$vehiculo = $_POST['vehiculo'];
$servicio = $_POST['servicio'];
$tipo = $_POST['tipo'];
$origen = $_POST['origen'];
$destino = $_POST['destino'];
$nombre = $_POST['nombre'];


//Logica de la cotizacion
if($vehiculo == "buseta" && $tipo == "vip" && (($origen == "cali" || $origen == "medellin" || $origen == "cucuta"
    || $origen == "ibague" || $origen == "barranquilla" || $origen == "cartagena" || $origen == "pereira"
    || $origen == "manizales" || $origen == "santamarta" || $origen == "villavicencio" || $origen == "pasto"
    || $origen == "neiva" || $origen == "armenia" || $origen == "popayan" || $origen == "sincelejo"
    || $origen == "monteria" || $origen == "valledupar" || $origen == "tunja" && $destino == "bogota" ||
    $destino == "cali" || $destino == "medellin" || $destino == "cucuta"
    || $destino == "ibague" || $destino == "barranquilla" || $destino == "cartagena" || $destino== "pereira"
    || $destino == "manizales" || $destino == "santamarta" || $destino== "villavicencio" || $destino == "pasto"
    || $destino == "neiva" || $destino == "armenia" || $destino == "popayan" || $destino == "sincelejo"
    || $destino == "monteria" || $destino== "valledupar" || $destino== "tunja"
    ))){
    $precio = 20000;
}
else if($vehiculo == "buseta" && $tipo == "general" && (($origen == "cali" || $origen == "medellin" || $origen == "cucuta"
    || $origen == "ibague" || $origen == "barranquilla" || $origen == "cartagena" || $origen == "pereira"
    || $origen == "manizales" || $origen == "santamarta" || $origen == "villavicencio" || $origen == "pasto"
    || $origen == "neiva" || $origen == "armenia" || $origen == "popayan" || $origen == "sincelejo"
    || $origen == "monteria" || $origen == "valledupar" || $origen == "tunja" && $destino == "bogota" ||
    $destino == "cali" || $destino == "medellin" || $destino == "cucuta"
    || $destino == "ibague" || $destino == "barranquilla" || $destino == "cartagena" || $destino== "pereira"
    || $destino == "manizales" || $destino == "santamarta" || $destino== "villavicencio" || $destino == "pasto"
    || $destino == "neiva" || $destino == "armenia" || $destino == "popayan" || $destino == "sincelejo"
    || $destino == "monteria" || $destino== "valledupar" || $destino== "tunja"))){
    $precio = 30000;}

else if ($vehiculo == "bus" && $tipo == "vip" && (($origen == "cali" || $origen == "medellin" || $origen == "cucuta"
    || $origen == "ibague" || $origen == "barranquilla" || $origen == "cartagena" || $origen == "pereira"
    || $origen == "manizales" || $origen == "santamarta" || $origen == "villavicencio" || $origen == "pasto"
    || $origen == "neiva" || $origen == "armenia" || $origen == "popayan" || $origen == "sincelejo"
    || $origen == "monteria" || $origen == "valledupar" || $origen == "tunja" && $destino == "bogota" ||
    $destino == "cali" || $destino == "medellin" || $destino == "cucuta"
    || $destino == "ibague" || $destino == "barranquilla" || $destino == "cartagena" || $destino== "pereira"
    || $destino == "manizales" || $destino == "santamarta" || $destino== "villavicencio" || $destino == "pasto"
    || $destino == "neiva" || $destino == "armenia" || $destino == "popayan" || $destino == "sincelejo"
    || $destino == "monteria" || $destino== "valledupar" || $destino== "tunja"))){
        $precio = 15000;
    }
else if ($vehiculo == "bus" && $tipo == "general" && (($origen == "cali" || $origen == "medellin" || $origen == "cucuta"
    || $origen == "ibague" || $origen == "barranquilla" || $origen == "cartagena" || $origen == "pereira"
    || $origen == "manizales" || $origen == "santamarta" || $origen == "villavicencio" || $origen == "pasto"
    || $origen == "neiva" || $origen == "armenia" || $origen == "popayan" || $origen == "sincelejo"
    || $origen == "monteria" || $origen == "valledupar" || $origen == "tunja" && $destino == "bogota" ||
    $destino == "cali" || $destino == "medellin" || $destino == "cucuta"
    || $destino == "ibague" || $destino == "barranquilla" || $destino == "cartagena" || $destino== "pereira"
    || $destino == "manizales" || $destino == "santamarta" || $destino== "villavicencio" || $destino == "pasto"
    || $destino == "neiva" || $destino == "armenia" || $destino == "popayan" || $destino == "sincelejo"
    || $destino == "monteria" || $destino== "valledupar" || $destino== "tunja"))){
        $precio = 30000;
    }
else if ($vehiculo == "gacela" && $tipo == "vip" && (($origen == "cali" || $origen == "medellin" || $origen == "cucuta"
    || $origen == "ibague" || $origen == "barranquilla" || $origen == "cartagena" || $origen == "pereira"
    || $origen == "manizales" || $origen == "santamarta" || $origen == "villavicencio" || $origen == "pasto"
    || $origen == "neiva" || $origen == "armenia" || $origen == "popayan" || $origen == "sincelejo"
    || $origen == "monteria" || $origen == "valledupar" || $origen == "tunja" && $destino == "bogota" ||
    $destino == "cali" || $destino == "medellin" || $destino == "cucuta"
    || $destino == "ibague" || $destino == "barranquilla" || $destino == "cartagena" || $destino== "pereira"
    || $destino == "manizales" || $destino == "santamarta" || $destino== "villavicencio" || $destino == "pasto"
    || $destino == "neiva" || $destino == "armenia" || $destino == "popayan" || $destino == "sincelejo"
    || $destino == "monteria" || $destino== "valledupar" || $destino== "tunja"))){
        $precio = 35000;
    }
else if ($vehiculo == "gacela" && $tipo == "general" && (($origen == "cali" || $origen == "medellin" || $origen == "cucuta"
    || $origen == "ibague" || $origen == "barranquilla" || $origen == "cartagena" || $origen == "pereira"
    || $origen == "manizales" || $origen == "santamarta" || $origen == "villavicencio" || $origen == "pasto"
    || $origen == "neiva" || $origen == "armenia" || $origen == "popayan" || $origen == "sincelejo"
    || $origen == "monteria" || $origen == "valledupar" || $origen == "tunja" && $destino == "bogota" ||
    $destino == "cali" || $destino == "medellin" || $destino == "cucuta"
    || $destino == "ibague" || $destino == "barranquilla" || $destino == "cartagena" || $destino== "pereira"
    || $destino == "manizales" || $destino == "santamarta" || $destino== "villavicencio" || $destino == "pasto"
    || $destino == "neiva" || $destino == "armenia" || $destino == "popayan" || $destino == "sincelejo"
    || $destino == "monteria" || $destino== "valledupar" || $destino== "tunja"))){
        $precio = 50000;
    }
else if ($vehiculo == "camion" && $tipo == "vip" &&(( $origen == "cali" || $origen == "medellin" || $origen == "cucuta"
    || $origen == "ibague" || $origen == "barranquilla" || $origen == "cartagena" || $origen == "pereira"
    || $origen == "manizales" || $origen == "santamarta" || $origen == "villavicencio" || $origen == "pasto"
    || $origen == "neiva" || $origen == "armenia" || $origen == "popayan" || $origen == "sincelejo"
    || $origen == "monteria" || $origen == "valledupar" || $origen == "tunja" && $destino == "bogota" ||
    $destino == "cali" || $destino == "medellin" || $destino == "cucuta"
    || $destino == "ibague" || $destino == "barranquilla" || $destino == "cartagena" || $destino== "pereira"
    || $destino == "manizales" || $destino == "santamarta" || $destino== "villavicencio" || $destino == "pasto"
    || $destino == "neiva" || $destino == "armenia" || $destino == "popayan" || $destino == "sincelejo"
    || $destino == "monteria" || $destino== "valledupar" || $destino== "tunja"))){
        $precio = 25000;
    }
else if ($vehiculo == "camion" && $tipo == "general" && (($origen == "cali" || $origen == "medellin" || $origen == "cucuta"
    || $origen == "ibague" || $origen == "barranquilla" || $origen == "cartagena" || $origen == "pereira"
    || $origen == "manizales" || $origen == "santamarta" || $origen == "villavicencio" || $origen == "pasto"
    || $origen == "neiva" || $origen == "armenia" || $origen == "popayan" || $origen == "sincelejo"
    || $origen == "monteria" || $origen == "valledupar" || $origen == "tunja" && $destino == "bogota" ||
    $destino == "cali" || $destino == "medellin" || $destino == "cucuta"
    || $destino == "ibague" || $destino == "barranquilla" || $destino == "cartagena" || $destino== "pereira"
    || $destino == "manizales" || $destino == "santamarta" || $destino== "villavicencio" || $destino == "pasto"
    || $destino == "neiva" || $destino == "armenia" || $destino == "popayan" || $destino == "sincelejo"
    || $destino == "monteria" || $destino== "valledupar" || $destino== "tunja"))){
        $precio = 30000;
    }
else if ($vehiculo == "taxi" && $tipo == "vip" && (($origen == "cali" || $origen == "medellin" || $origen == "cucuta"
    || $origen == "ibague" || $origen == "barranquilla" || $origen == "cartagena" || $origen == "pereira"
    || $origen == "manizales" || $origen == "santamarta" || $origen == "villavicencio" || $origen == "pasto"
    || $origen == "neiva" || $origen == "armenia" || $origen == "popayan" || $origen == "sincelejo"
    || $origen == "monteria" || $origen == "valledupar" || $origen == "tunja" && $destino == "bogota" ||
    $destino == "cali" || $destino == "medellin" || $destino == "cucuta"
    || $destino == "ibague" || $destino == "barranquilla" || $destino == "cartagena" || $destino== "pereira"
    || $destino == "manizales" || $destino == "santamarta" || $destino== "villavicencio" || $destino == "pasto"
    || $destino == "neiva" || $destino == "armenia" || $destino == "popayan" || $destino == "sincelejo"
    || $destino == "monteria" || $destino== "valledupar" || $destino== "tunja"))){
        $precio = 150000;
    }
else if($vehiculo == "taxi" && $tipo == "general" && (($origen == "cali" || $origen == "medellin" || $origen == "cucuta"
    || $origen == "ibague" || $origen == "barranquilla" || $origen == "cartagena" || $origen == "pereira"
    || $origen == "manizales" || $origen == "santamarta" || $origen == "villavicencio" || $origen == "pasto"
    || $origen == "neiva" || $origen == "armenia" || $origen == "popayan" || $origen == "sincelejo"
    || $origen == "monteria" || $origen == "valledupar" || $origen == "tunja" && $destino == "bogota" ||
    $destino == "cali" || $destino == "medellin" || $destino == "cucuta"
    || $destino == "ibague" || $destino == "barranquilla" || $destino == "cartagena" || $destino== "pereira"
    || $destino == "manizales" || $destino == "santamarta" || $destino== "villavicencio" || $destino == "pasto"
    || $destino == "neiva" || $destino == "armenia" || $destino == "popayan" || $destino == "sincelejo"
    || $destino == "monteria" || $destino== "valledupar" || $destino== "tunja"))){
        $precio = 140000;
    }
else if ($vehiculo == "aerovan" && $tipo == "vip" && (($origen == "cali" || $origen == "medellin" || $origen == "cucuta"
    || $origen == "ibague" || $origen == "barranquilla" || $origen == "cartagena" || $origen == "pereira"
    || $origen == "manizales" || $origen == "santamarta" || $origen == "villavicencio" || $origen == "pasto"
    || $origen == "neiva" || $origen == "armenia" || $origen == "popayan" || $origen == "sincelejo"
    || $origen == "monteria" || $origen == "valledupar" || $origen == "tunja" && $destino == "bogota" ||
    $destino == "cali" || $destino == "medellin" || $destino == "cucuta"
    || $destino == "ibague" || $destino == "barranquilla" || $destino == "cartagena" || $destino== "pereira"
    || $destino == "manizales" || $destino == "santamarta" || $destino== "villavicencio" || $destino == "pasto"
    || $destino == "neiva" || $destino == "armenia" || $destino == "popayan" || $destino == "sincelejo"
    || $destino == "monteria" || $destino== "valledupar" || $destino== "tunja"))){
        $precio = 150000;
    }
else if ($vehiculo == "aerovan" && $tipo == "general" &&(( $origen == "cali" || $origen == "medellin" || $origen == "cucuta"
    || $origen == "ibague" || $origen == "barranquilla" || $origen == "cartagena" || $origen == "pereira"
    || $origen == "manizales" || $origen == "santamarta" || $origen == "villavicencio" || $origen == "pasto"
    || $origen == "neiva" || $origen == "armenia" || $origen == "popayan" || $origen == "sincelejo"
    || $origen == "monteria" || $origen == "valledupar" || $origen == "tunja" && $destino == "bogota" ||
    $destino == "cali" || $destino == "medellin" || $destino == "cucuta"
    || $destino == "ibague" || $destino == "barranquilla" || $destino == "cartagena" || $destino== "pereira"
    || $destino == "manizales" || $destino == "santamarta" || $destino== "villavicencio" || $destino == "pasto"
    || $destino == "neiva" || $destino == "armenia" || $destino == "popayan" || $destino == "sincelejo"
    || $destino == "monteria" || $destino== "valledupar" || $destino== "tunja"))){
        $precio = 160000;
    }
else{
    $precio = 0;

}  
    //mensajes a mostrar
    echo "<h2>🚍 cotización generada</h2>";
    echo "<p> Nombre: $nombre</p>";
    echo "<p> Vehiculo: $vehiculo</p>";
    echo "<p> Servicio: $servicio</p>";
    echo "<p> Tipo: $tipo</p>";
    echo "<p> Origen: $origen</p>";
    echo "<p> Destino: $destino</p>";
    echo "<p> Fecha: $fecha</p>";
    echo "<p> Precio: $precio</p>";

// Guardar la cotización en la base de datos
$sql = "INSERT INTO sistema_cotizar (nombre, vehiculo, servicio, tipo, origen, destino, fecha, precio)
        VALUES ('$nombre', '$vehiculo', '$servicio', '$tipo', '$origen', '$destino', '$fecha', '$precio')";

if ($conn->query($sql) === TRUE) {
    //echo "<p>✅ Cotización guardada correctamente en la base de datos.</p>";
} else {
    echo "<p>❌ Error al guardar: " . $conn->error . "</p>";
}
//cerrar la conexion
$conn->close();
?>
<!--Boton para volver al inicio-->
<form action="../index.html">
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


