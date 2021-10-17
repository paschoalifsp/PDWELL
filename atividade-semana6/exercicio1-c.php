<?php
$n =28;
$soma = 0;
$i=2;
while ($i <= $n){
    if($n%$i == 0){
        $divisor=$n/$i;
        $soma = $soma + $divisor;
    }
    $i++;
}

if($n == $soma ){
    echo "$n é perfeito";
}
    
else{
    echo "$n nao é perfeito";
}