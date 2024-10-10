<?php

function calculaArea()
{
    if (isset($_POST['lado_a']) && isset($_POST['lado_b'])) {
        $ladoA = (float) $_POST['lado_a'];
        $ladoB = (float) $_POST['lado_b'];
 
        $area = $ladoA * $ladoB;

        if ($area > 10) {
            echo "<h1>A área do retângulo de lados {$ladoA} e {$ladoB} metros é " . number_format($area, 2) . " metros quadrados.</h1>";
        } else {
            echo "<h3>A área do retângulo de lados {$ladoA} e {$ladoB} metros é " . number_format($area, 2) . " metros quadrados.</h3>";
        }
    }
}