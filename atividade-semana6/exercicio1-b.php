<?php
$n = 11;
$contador = 0;
$i=1;
while ($i <= $n){
    if($n%$i == 0){
        $contador++;
    }
    
    $i++;
}

if($contador == 2){
    echo "$n é primo";
}
    
else{
    echo "$n é composto";
}
    
    