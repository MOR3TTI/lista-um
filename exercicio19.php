<!DOCTYPE html>
<html>
<head>
    <title>Verificar Força da Senha</title>
</head>
<body>

<form method="POST">
    <label>Digite uma senha:</label>
    <input type="password" name="senha" required>
    <br><br>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senha = $_POST["senha"];
    $tem_letra = preg_match('/[a-zA-Z]/', $senha);
    $tem_numero = preg_match('/\d/', $senha);

    if (strlen($senha) < 8) {
        echo "<p>A senha deve ter pelo menos 8 caracteres.</p>";
    } elseif (!$tem_letra) {
        echo "<p>A senha deve conter pelo menos uma letra.</p>";
    } elseif (!$tem_numero) {
        echo "<p>A senha deve conter pelo menos um número.</p>";
    } else {
        echo "<p><strong>Senha forte!</strong></p>";
    }
}
?>

</body>
</html>