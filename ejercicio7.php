<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7 - Bucle While</title>
</head>
<body>
    <h1>Secuencia del 1 al 20</h1>
    <ul>
        <?php
        $i = 1;
        while ($i <= 20) {
            echo "<li>$i</li>";
            $i++;
        }
        ?>
    </ul>
</body>
</html>