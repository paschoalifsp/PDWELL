<html>
 <head>
  <title>Apostila PHP Progressivo</title>
 </head>
 <body>
<?php
$limite = 100;
$n = 1;
$contador = 0;
$i=1;
$primos = array();

while($n < $limite){

while ($i <= $n){
    if($n%$i == 0){
        $contador++;
    }
    $i++;
}

if($contador == 2){
    array_push($primos, $n);
}
    
$n++;
$contador = 0;
$i=1;
}

echo "[" ;
for ($i = 0; $i<count($primos); $i++){
        
    echo "$primos[$i], " ;
}
echo "]" ;
?>
</body>
</html>