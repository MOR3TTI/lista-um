<!DOCTYPE html>
<html>
<head>
    <title>Verificar Palíndromo</title>
</head>
<body>

<form method="POST">
    <label>Digite uma palavra:</label>
    <input type="text" name="palavra" required>
    <br><br>
    <button type="submit">Verificar Palíndromo</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palavra = $_POST["palavra"];

    $palavraLimpa = strtolower(str_replace(' ', '', $palavra));
    $palavraInvertida = strrev($palavraLimpa);

    if ($palavraLimpa === $palavraInvertida) {
        echo "<p>A palavra <strong>$palavra</strong> é um palíndromo.</p>";
    } else {
        echo "<p>A palavra <strong>$palavra</strong> não é um palíndromo.</p>";
    }
}
?>

</body>
</html>