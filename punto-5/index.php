<?php
  // Datos de entrada
const VALOR_ENTRADA = 25000;
$categoria = "";
$cantidad_entradas = 0;

// Proceso
echo "Digite su categoria : ";
$categoria = readline ();

echo "Digite la cantidad de entradas : ";
$cantidad_entradas = readline ();

$total = $cantidad_entradas * VALOR_ENTRADA;

//Descuentos
if ($categoria == "a" || $categoria == "b") {
  $total = (VALOR_ENTRADA * $cantidad_entradas) * 0.7;
  echo "El total a pagar es: $total \n";
  }

else {
  $total = (VALOR_ENTRADA * $cantidad_entradas);
  echo "Categotia sin descuento: total a pagar: $total \n";
}

?>
