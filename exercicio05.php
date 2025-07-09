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
    <button type="submit">Verificar</button>
</form>

<?php
function somaDivisores($n) {
    $soma = 0;
    for ($i = 1; $i <= $n / 2; $i++) {
        if ($n % $i == 0) {
            $soma += $i;
        }
    }
    return $soma;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = intval($_POST["numero1"]);
    $numero2 = intval($_POST["numero2"]);

    $soma1 = somaDivisores($numero1);
    $soma2 = somaDivisores($numero2);

    if ($soma1 == $numero2 && $soma2 == $numero1) {
        echo "<p>Os números <strong>$numero1</strong> e <strong>$numero2</strong> são <strong>números amigos</strong>.</p>";
    } else {
        echo "<p>Os números <strong>$numero1</strong> e <strong>$numero2</strong> <strong>não</strong> são números amigos.</p>";
    }
}
?>

</body>
</html>