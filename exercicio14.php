<!DOCTYPE html>
<html>
<head>
    <title>Verificar Par ou Ímpar</title>
</head>
<body>

<form method="POST">
    <label>Digite o ano:</label>
    <input type="number" name="numero" required>
    <br>
    <br>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ano = intval($_POST["numero"]);

    function verificarAnoBissexto($ano) {
        if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
            return true;
        }
        return false;
    }
    if (verificarAnoBissexto($ano)) {
        echo "<p>O ano <strong>$ano</strong> é <strong>BISSEXTO</strong>.</p>";
    } else {
        echo "<p>O ano <strong>$ano</strong> não é <strong>BISSEXTO</strong>.</p>";
    }
};

?>

</body>
</html>