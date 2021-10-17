<?php

$numero = 5;
$fatorial = 1;
$contador = 1;

while ($contador <= $numero){
    $fatorial *= $contador;
    $contador++;
}

echo $fatorial;