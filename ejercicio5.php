<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 - Positivo, Negativo o Cero</title>
</head>
<body>
    <h1>Verificar Número</h1>
    <form method="POST">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        if ($numero > 0) {
            echo "<p>El número es positivo.</p>";
        } elseif ($numero < 0) {
            echo "<p>El número es negativo.</p>";
        } else {
            echo "<p>El número es cero.</p>";
        }
    }
    ?>
</body>
</html>