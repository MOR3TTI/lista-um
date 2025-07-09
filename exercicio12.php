<!DOCTYPE html>
<html>
<head>
    <title>Contar Vogais</title>
</head>
<body>

<form method="POST">
    <label>Digite uma palavra:</label>
    <input type="text" name="palavra" required>
    <br><br>
    <button type="submit">Contar Vogais</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palavra = $_POST["palavra"];

    $vogais = preg_match_all('/[aeiouáéíóúãõâêîôûàèìòùäëïöü]/i', $palavra, $matches);

    echo "<p>A palavra <strong>$palavra</strong> possui <strong>$vogais</strong> vogais.</p>";
}
?>

</body>
</html>
