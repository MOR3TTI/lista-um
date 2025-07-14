<!DOCTYPE html>
<html>
<head>
    <title>Verificar se Pode Votar</title>
</head>
<body>

<form method="POST">
    <label>Nome:</label>
    <input type="text" name="nome" required>
    <br><br>
    <label>Idade:</label>
    <input type="number" name="idade" required>
    <br><br>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $idade = intval($_POST["idade"]);

    if ($idade >= 16) {
        echo "<p>$nome, você pode votar.</p>";
    } else {
        echo "<p>$nome, você <strong>não</strong> pode votar.</p>";
    }
}
?>

</body>
</html>
