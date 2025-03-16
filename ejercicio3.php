<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Arreglo y Bucle</title>
</head>
<body>
    <h1>Lista de Ciudades</h1>
    <ol>
        <?php
        $ciudades = ["Soyapango", "San Salvador", "San Miguel", "Usulutan", "La Union"];
        foreach ($ciudades as $ciudad) {
            echo "<li>$ciudad</li>";
        }
        ?>
    </ol>
</body>
</html>