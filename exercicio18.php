<!DOCTYPE html>
<html>
<head>
    <title>Maior de Três Números</title>
</head>
<body>

<form method="POST">
    <label>Digite o primeiro número:</label>
    <input type="number" name="numero1" required>
    <br><br>
    <label>Digite o segundo número:</label>
    <input type="number" name="numero2" required>
    <br><br>
    <label>Digite o terceiro número:</label>
    <input type="number" name="numero3" required>
    <br><br>
    <button type="submit">Verificar Maior</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST["numero1"];
    $n2 = $_POST["numero2"];
    $n3 = $_POST["numero3"];

    $maior = $n1;

    if ($n2 > $maior) {
        $maior = $n2;
    }
    if ($n3 > $maior) {
        $maior = $n3;
    }

    echo "<p>O maior número é: <strong>$maior</strong></p>";
}
?>

</body>
</html>