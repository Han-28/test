<?php 
$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$numero3 = $_POST['num3'];
$numero4 = $_POST['num4'];
$suma = $numero1 + $numero2;
$producto = $numero3 * $numero4;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio B</title>
</head>
<body>
    <h1>Ejercicio B</h1>
    <h2>Suma = <?php echo $suma?></h2>
    <h2>Producto = <?php echo $producto?></h2>
    <a href="ejercicioB.html">Regresar</a>
</body>
</html>