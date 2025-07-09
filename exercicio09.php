<!DOCTYPE html>
<html>
<head>
    <title>Verificar se os numeros sao amigos</title>
</head>
<body>

<form method="POST">
    <label>Digite o primeiro número:</label>
    <input type="number" name="numero1" required>
    <br>
    <br>
    <label>Digite o segundo número:</label>
    <input type="number" name="numero2" required>
    <br>
    <br>
    <button type="submit">Calcular Soma</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = intval($_POST["numero1"]);
    $numero2 = intval($_POST["numero2"]);

    $inicio = min($numero1, $numero2) + 1;
    $fim = max($numero1, $numero2) - 1;
    $soma = 0;

    if ($inicio > $fim) {
        echo "<p>Não há números entre $numero1 e $numero2.</p>";
    } else {
        for ($i = $inicio; $i <= $fim; $i++) {
            $soma += $i;
        }
        echo "<p>A soma dos números entre <strong>$numero1</strong> e <strong>$numero2</strong> é <strong>$soma</strong>.</p>";
    }
}
?>

</body>
</html>