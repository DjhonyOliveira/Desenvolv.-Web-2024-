<?php

function calculaArea()
{
     if (isset($_POST['base']) && isset($_POST['altura'])) {
        $base   = $_POST['base'];
        $altura = $_POST['altura'];

        $area = ($base * $altura) / 2;

        echo "A área do triângulo retângulo com base {$base} metros e altura {$altura} metros é " . number_format($area, 2) . " metros quadrados.";
    }
}