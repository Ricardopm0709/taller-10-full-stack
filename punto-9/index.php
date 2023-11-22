<?php

//Datos de entrada
$number = 0;
$multip = 0;

//Proceso
echo "Digite el numero a multiplicar: ";
$number = readline();

//Resultado
while ($multip <= 30){
  $total = $number * $multip;
  echo $number."x". $multip."=".$total . "\n";
  $multip++;
  
}


?>
