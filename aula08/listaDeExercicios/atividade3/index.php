<?php

require __DIR__ . "/functions.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Quadrado</title>
</head>
<body>
    <h1>Cálculo da Área do Quadrado</h1>
    <form method="post" action="">
        <label for="lado">Comprimento do lado (em metros):</label>
        <input type="number" name="lado" id="lado" step="0.01" required>
        <button type="submit">Calcular Área</button>
    </form>

    <div id="resultado">
        <?= calculaArea() ?>
    </div>
</body>
</html>