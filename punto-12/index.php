<?php
//datos de entrtada
$number = 0;

//Proceso
echo "Digite el numero a multiplicar: ";
$number = readline();

for ($x = 0; $x <= 30 ; $x++) {
  $result = $number * $x;
  echo $number . " X " . $x . " = " . $result . "\n";
}


?>