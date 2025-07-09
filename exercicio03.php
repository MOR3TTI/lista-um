<!DOCTYPE html>
<html>
<head>
    <title>Verificar Positivo ou Negativo</title>
</head>
<body>

<form method="POST">
    <label>Digite um número:</label>
    <input type="number" name="numero" required>
    <br>
    <br>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if ($numero > 0) {
        echo "<p>O número <strong>$numero</strong> é <strong>Positivo</strong>.</p>";
    } else {
        echo "<p>O número <strong>$numero</strong> é <strong>Negativo</strong>.</p>";
    };
};

?>

</body>
</html>