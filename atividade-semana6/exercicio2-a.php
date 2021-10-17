<html>
 <head>
  <title>Apostila PHP Progressivo</title>
 </head>
 <body>
 <?php 
    $numero = 5;
    $fatorial = 1;
    $contador = 1;
    $fatoriais = array();

    while ($contador <= $numero){
        $fatorial *= $contador;
        array_push($fatoriais, $fatorial);
        $contador++;
        
        }
        echo "[" ;
    for ($i = 0; $i<$numero; $i++){
        
        echo "$fatoriais[$i], " ;
    }
    echo "]" ;
 ?>
 </body>
</html>