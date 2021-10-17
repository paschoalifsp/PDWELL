<html>
 <head>
  <title>Apostila PHP Progressivo</title>
 </head>
 <body>
<?php
$limite = 1000;
$n = 1;
$soma = 0;
$perfeitos = array();
$i=2;
while($n < $limite){

while ($i <= $n){
    if($n%$i == 0){
        $divisor=$n/$i;
        $soma = $soma + $divisor;
    }
    $i++;
}

if($n == $soma ){
    array_push($perfeitos, $n);
}

$n++;
$i=2;
$soma=0;
}
echo "[" ;
for ($i = 0; $i<count($perfeitos); $i++){
        
    echo "$perfeitos[$i], " ;
}
echo "]" ;
?>
</body>
</html>
    