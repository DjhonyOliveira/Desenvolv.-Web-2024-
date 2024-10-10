<?php

require __DIR__ . "/functions.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Triângulo Retângulo</title>
</head>
<body>
    <h1>Cálculo da Área do Triângulo Retângulo</h1>
    <form method="post" action="">
        <label for="base">Comprimento da base (em metros):</label>
        <input type="number" name="base" id="base" step="0.01" required>

        <label for="altura">Comprimento da altura (em metros):</label>
        <input type="number" name="altura" id="altura" step="0.01" required>

        <button type="submit">Calcular Área</button>
    </form>

    <div id="resultado">
        <?= calculaArea() ?>
    </div>
</body>
</html>
