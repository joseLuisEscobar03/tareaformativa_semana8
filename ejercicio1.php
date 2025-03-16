<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Formulario</title>
</head>
<body>
    <h1>Datos Recibidos</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['nombre']);
        $email = htmlspecialchars($_POST['email']);
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Email: $email</p>";
    } else {
        echo "<p>No se recibieron datos.</p>";
    }
    ?>
</body>
</html>