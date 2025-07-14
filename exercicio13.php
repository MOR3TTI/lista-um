<!DOCTYPE html>
<html>
<head>
    <title>Converter Celsius para Fahrenheit</title>
</head>
<body>

<form method="POST">
    <label>Digite a temperatura em Celsius:</label>
    <input type="number" name="celsius" step="any" required>
    <br><br>
    <button type="submit">Converter</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $celsius = floatval($_POST["celsius"]);

    $fahrenheit = ($celsius * 9/5) + 32;
    echo "<p>$celsius °C = $fahrenheit °F</p>";
}
?>

</body>
</html>
