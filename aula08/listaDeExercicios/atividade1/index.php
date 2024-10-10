
<?php

require(__DIR__ . "/functions.php")

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos</title>
    <link rel="stylesheet" href="style.css">
    <script src="index.js" defer></script>
</head>
<body>
    <form method="POST">
        <label for="valor1">Valor 1:</label>
        <input type="number" name="valor1" id="valor1" value="<?= getValor1() ?>" required>
        <label for="valor2">Valor 2:</label>
        <input type="number" name="valor2" id="valor2" value="<?= getValor2() ?>" required>
        <label for="valor3">Valor 3:</label>
        <input type="number" name="valor3" id="valor3" value="<?= getValor3() ?>" required>
        <button id="calcular" type="submit">Calcular</button>
    </form>
    <hr>
    <br />
    <div class="result">
        <input type="text" id="valorCalculado" value="<?= calcula() ?>">
    </div>
</body>
</html>