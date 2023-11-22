<?php

  //Datos de entrada
  $nombres_apellidos = "";
  $edad = 0;

 //Proceso
  echo "Ingrese su Nombre y Apellido : ";
$nombres_apellidos = readline();
echo "ingrese su edad : ";
$edad = readline();

 // Salida
if ($edad >= 18) {
  
  echo "Bienvenido: " . " " . $nombres_apellidos . " " . "Eres mayor de edad";
} else {
  
  echo "Bienvenido: " . " " . $nombres_apellidos . " " . "Eres menor de edad";
}

?>