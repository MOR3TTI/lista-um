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
    <button type="submit">Exibir Divisores</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);
    echo "<p>Divisores de <strong>$numero</strong>:</p>";
    echo "<ul>";
    for ($i = 1; $i <= abs($numero); $i++) {
        if ($numero % $i == 0) {
            echo "<li>$i</li>";
        }
    }
    echo "</ul>";
}
?>

</body>
</html>