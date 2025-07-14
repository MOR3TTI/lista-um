<!DOCTYPE html>
<html>
<head>
    <title>Validar Data</title>
</head>
<body>

<form method="POST">
    <label>Dia:</label>
    <input type="number" name="dia" min="1" max="31" >
    <br>
    <label>Mês:</label>
    <input type="number" name="mes" min="1" max="12" >
    <label>Ano:</label>
    <input type="number" name="ano" min="1" >
    <br><br>
    <button type="submit">Validar Data</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $ano = $_POST["ano"];

    if (checkdate($mes, $dia, $ano)) {
        echo "<p>A data $dia/$mes/$ano é válida.</p>";
    } else {
        echo "<p>A data $dia/$mes/$ano não é válida.</p>";
    }
}
?>

</body>
</html>