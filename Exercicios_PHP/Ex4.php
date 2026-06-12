<?php

$n = readline("Digite um valor para a tabuada: ");
$contador = 1; // Ponto de Partida

while ($contador <= 10) { // Critério de Parada
    
    $mult = $n * $contador;
    echo "$n x $contador = $mult\n";
    $contador++; // Incremento
}
