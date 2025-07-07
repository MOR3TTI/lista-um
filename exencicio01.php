<!DOCTYPE html>
<html>
<head>
    <title>Verificar Par ou Ímpar</title>
</head>
<body>

<form method="POST">
    <label>Digite um número:</label>
    <input type="number" name="numero" required>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if ($numero % 2 == 0) {
        echo "<p>O número <strong>$numero</strong> é <strong>PAR</strong>.</p>";
    } else {
        echo "<p>O número <strong>$numero</strong> é <strong>ÍMPAR</strong>.</p>";
    };
};

?>

</body>
</html>