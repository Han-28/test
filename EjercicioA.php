<?php 
$nombre = $_GET['nombre'];
$correo = $_GET['correo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio A</title>
</head>
<body>
    <h1> Ejercicio A</h1>
    <h2>Nombre: <?php echo $nombre ?></h2>
    <h3>E -mail: <?php echo $correo ?> </h3>
    <a href="ejercicioA.html">Regresar</a>
    
</body>
</html>