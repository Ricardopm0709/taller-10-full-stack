<?php
//Datos de entrada

$numberArray = array(7, 2, 8, 1, 6,);
$sum = 0;

// Proceso
foreach ($numberArray as $num) {
  $sum = $sum + $num;
}

echo "La suma de los numeros es: " . $sum;


?>