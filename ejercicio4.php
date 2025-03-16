<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 - Factorial</title>
</head>
<body>
    <h1>Calculadora de Factorial</h1>
    <form method="POST">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcular</button>
    </form>
    <?php
    function factorial($n) {
        if ($n <= 1) {
            return 1;
        }
        return $n * factorial($n - 1);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        if ($numero >= 0) {
            $resultado = factorial($numero);
            echo "<p>El factorial de $numero es $resultado.</p>";
        } else {
            echo "<p>Por favor, introduce un número válido.</p>";
        }
    }
    ?>
</body>
</html>