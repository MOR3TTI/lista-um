<!DOCTYPE html>
<html>
<head>
    <title>Sequência de Fibonacci até N</title>
</head>
<body>

<form method="POST">
    <label>Digite um número:</label>
    <input type="number" name="numero" min="0" required>
    <br><br>
    <button type="submit">Exibir Fibonacci</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = intval($_POST["numero"]);
    $fibonacci = [];

    $a = 0;
    $b = 1;

    if ($n >= 0) {
        $fibonacci[] = $a;
    }
    if ($n >= 1) {
        $fibonacci[] = $b;
    }

    while (true) {
        $next = $a + $b;
        if ($next > $n) {
            break;
        }
        $fibonacci[] = $next;
        $a = $b;
        $b = $next;
    }

    echo "<p>Sequência de Fibonacci até <strong>$n</strong>:<br>";
    echo implode(", ", $fibonacci);
    echo "</p>";
}
?>

</body>
</html>