<?php

$aDados = [
    ["Matemática", 22, 18 ],
    ["Português", 2, 9],
    ["Geografia", 10, 6],
    ["Educaçao Física", 2, 8 ],
];


foreach($aDados as $valor){
    echo "Máteria: {$valor[0]}, -- faltas: {$valor[1]}, -- Média: {$valor[2]}<br />";
}