<?php

$n1 = readline("Digite o primeiro valor: ");
$n2 = readline("Digite o segundo valor: ");
$operador = readline("Qual operação você deseja: (1-Soma, 2-Subtração, 3-Multiplicação, 4-Multiplicação)");

switch($operador){
    case 1: 
        $resultado = $n1 + $n2;
        echo "$n1 + $n2 = $resultado";
    break;

}