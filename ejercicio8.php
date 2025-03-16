<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8 - Arreglo Asociativo</title>
</head>
<body>
    <h1>Usuarios Mayores de 18 Años</h1>
    <?php
    $usuarios = [
        ["nombre" => "Juan", "edad" => 25, "ciudad" => "San Salvador"],
        ["nombre" => "Ana", "edad" => 17, "ciudad" => "San Miguel"],
        ["nombre" => "Luis", "edad" => 30, "ciudad" => "La Union "],
        ["nombre" => "Marta", "edad" => 16, "ciudad" => "Soyapango"],
        ["nombre" => "Carlos", "edad" => 22, "ciudad" => "Ahuachapan"]
    ];

    function filtrarUsuarios($usuarios) {
        $resultado = [];
        foreach ($usuarios as $usuario) {
            if ($usuario['edad'] >= 18) {
                $resultado[] = $usuario;
            }
        }
        return $resultado;
    }

    $usuariosFiltrados = filtrarUsuarios($usuarios);
    echo "<ul>";
    foreach ($usuariosFiltrados as $usuario) {
        echo "<li>{$usuario['nombre']} - {$usuario['edad']} años - {$usuario['ciudad']}</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>