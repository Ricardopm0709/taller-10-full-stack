<?php
//Datos de entrada

$membershipType = "";
$personNumber = 0;
const TICKET_PRICE = 25000;

//Proceso

echo "ingrase su tipo de membrecia: ";
$membershipType = strtoupper(readline ());

echo "Digite el numero de personas: ";
$personNumber = readline ();

$totalPay = $personNumber * TICKET_PRICE;

switch ($membershipType) {
  case "A":
  $totalPay = $totalPay * 0.7;
    break;
  case "B":
  $totalPay = $totalPay * 0.75;
    break;
  case "C":
  $totalPay = $totalPay * 0.9;
    break;
  case "D":
  $totalPay = $totalPay * 0.95;
    break;
   default:
    echo "Tipo de membrecia no tiene descuento \n";
}
    echo "El total a pagar es : " . $totalPay;

?>