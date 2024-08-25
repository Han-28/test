<?php
$nombre = "Hector Castro";
$Nombre = "Hanmer";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 1</title>
</head>
<body>
    <header> </header>
    <nav> </nav>
    <article>
    <h1>Hola mundo <?php echo $Nombre ?></h1>
    <h2>Ejercicios desarrollados</h2>
    <ul>
        <li><a href="ejercicioA.html">Ejercicio A</a></li>
        <li><a href="ejercicioB.html">Ejercicio B</a></li>
    </ul>

    </article>
    <aside> 
    <?php  $nombre = "Desarrollo de aplicaciones en internet";
    define('IGV',0.18); 

    //Calculo de una operacion de arimetica
    $operacion = (5 + 6) * 3;
    /**
     * Calculamos un precio
     * Multiplicando por el IGV
     */
    $precio = $operacion + $operacion * IGV;
    echo $operacion . '<br>';
    echo $precio;
    ?>
    </aside>
    <footer> 
        &copy; <?php echo $nombre?>
    </footer>
    
</body>
</html>