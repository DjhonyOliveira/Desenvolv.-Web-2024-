<?php

require __DIR__ . "/functions.php"

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Divisibilidade</title>
</head>
<body>
    <h1>Teste se um Número é Divisível por 2</h1>
    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <div id="resultado">
        <?= calculaDivisivel() ?>
    </div>
</body>
</html>