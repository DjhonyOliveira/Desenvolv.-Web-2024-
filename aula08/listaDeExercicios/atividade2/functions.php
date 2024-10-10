<?php

function calculaDivisivel(){
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        if ($numero % 2 === 0) {
            echo "Valor divisível por 2";
        } else {
            echo "O valor não é divisível por 2";
        }
    }
}