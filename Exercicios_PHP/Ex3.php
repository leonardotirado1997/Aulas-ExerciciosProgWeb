<?php

$i = 1; // Ponto de Partida
$soma = 0;
while ($i <= 100) { // Critério de Parada
    $soma = $soma + $i;
    $i = $i + 1; // Incremento
}
echo "Somatório de 1 a 100 é: $soma";
