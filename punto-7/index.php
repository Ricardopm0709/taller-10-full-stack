<?php
//Datos de entrada

$numeroUno = 0;
$numeroDos = 0;
$opciones = "";
$resultado = 0;

//Proceso

echo "Elija la opcion a realizar: \n";
echo "+ _ Sumar \n";
echo "- _ Restar \n";
echo "* _ Multiplicar \n";
echo "/ _ Dividir \n";
$opciones = readline();

echo "Digite el primer numero: ";
$numeroUno = readline();

echo "Digite el segundo numero: ";
$numeroDos = readline();

switch ($opciones){
  case "+":
    $resultado = $numeroUno + $numeroDos;
  break;
case "-":
    $resultado = $numeroUno - $numeroDos;
  break;
case "*":
    $resultado = $numeroUno *  $numeroDos;
  break;
case "/":
     $resultado = $numeroUno / $numeroDos;
  break;
default:
  echo "Opcion no valida";
}
// salida
echo "El resultado de la operacion es: " . $resultado;

?>