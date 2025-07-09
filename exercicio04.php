<!DOCTYPE html>
<html>
<head>
    <title>Caulcular Fatorial</title>
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
function calcularFatorialRecursivo($numero) {
    if ($numero <= 1) {
        return 1;
    } else {
        return $numero * calcularFatorialRecursivo($numero - 1);
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["numero"])) {
    $numero = intval($_POST["numero"]);
    $resultado = calcularFatorialRecursivo($numero);
    echo "<p>O fatorial de {$numero} é {$resultado}.</p>";
}
?>

</body>
</html>