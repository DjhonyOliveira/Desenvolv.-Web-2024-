<?php

function getValor1()
{
    return isset($_POST['valor1']) ? $_POST['valor1'] : 0;
}

function getValor2()
{
    return isset($_POST['valor2']) ? $_POST['valor2'] : 0;
}

function getValor3()
{
    return isset($_POST['valor3']) ? $_POST['valor3'] : 0;
}

function getValoresForm(): array
{
    $valor1 = 0;
    $valor2 = 0;
    $valor3 = 0;

    if(isset($_POST['valor1'])){
        $valor1 = $_POST['valor1'];
    }
    
    if(isset($_POST['valor2'])){
        $valor2 = $_POST['valor2'];
    }
    
    if(isset($_POST['valor3'])){
        $valor3 = $_POST['valor3'];
    }

    return ["valor1" => $valor1,
            "valor2" => $valor2,
            "valor3" => $valor3,];
}
function calcula(): int
{
    $iCalculado = 0;
    $aValores  = getValoresForm();

    $iCalculado = $aValores['valor1'] + $aValores['valor2'] + $aValores['valor3'];

    return $iCalculado;
}