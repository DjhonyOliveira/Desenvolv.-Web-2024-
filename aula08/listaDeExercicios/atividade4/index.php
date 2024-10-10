<?php

require __DIR__ . "/functions.php";

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Retângulo</title>
</head>
<body>
    <h1>Cálculo da Área do Retângulo</h1>
    <form method="post" action="">
        <label for="lado_a">Comprimento do lado a (em metros):</label>
        <input type="number" name="lado_a" id="lado_a" step="0.01" required>
        
        <label for="lado_b">Comprimento do lado b (em metros):</label>
        <input type="number" name="lado_b" id="lado_b" step="0.01" required>
        
        <button type="submit">Calcular Área</button>
    </form>

    <div id="resultado">
        <?= calculaArea() ?>
    </div>
</body>
</html>