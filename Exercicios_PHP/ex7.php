<?php

$n = readline("Digite um numero superior de 1: ");
$contador = 1;
$soma = 0;
while ($contador <= $n) {
    $soma = $soma + $contador;
    $contador = $contador + 1;

    echo "S = $soma" . " C = $contador" . PHP_EOL;
}

echo "Soma = $soma";
