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
    $numero = intval($_POST["numero"]);
    $somaDivisores = 0;

    
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $somaDivisores += $i;
        }
    }

    if ($somaDivisores == $numero && $numero > 0) {
        echo "<p>O número <strong>$numero</strong> é <strong>Perfeito</strong>.</p>";
    } else {
        echo "<p>O número <strong>$numero</strong> <strong>não</strong> é perfeito.</p>";
    }
}

?>

</body>
</html>