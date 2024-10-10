<?php

function calculaArea()
{
    if (isset($_POST['lado'])) {
        $lado = (float) $_POST['lado'];

        $area = $lado * $lado;

        echo "A área do quadrado de lado {$lado} metros é " . number_format($area, 2) . " metros quadrados.";
    }
}