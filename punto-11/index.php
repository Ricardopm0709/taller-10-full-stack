<?php

//Datos de entrada

$x = 0;
$sum = 0;

//Proceso

for ($x = 1; $x <= 100; $x = $x + 2) {
  echo $x . "\n";
  $sum += $x;

}

  echo "la suma de todos los numeros impares es: " . $sum;
  

?>