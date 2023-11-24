<?php
include "./passwordCheck.php";
//Datos de entrada
$user = "";
$password = "";

//Proceso
echo "Digite su usuario a registrar \n";
$user = readline();

echo "Digite su contraseña a regitrar \n";
$password = readline();

if (passwordHasSecurityLong ($password)) {
 if (hasUpperLetter ($password)) {
  if (hasNumber ($password)) {

    echo "Felicitaciones su contraseña es SEGURA \n";

} else {
  echo "Su contraseña NO cumple con la longitud segura \n";
}

}else {
  echo "Su contraseña NO tiene letras mayusculas \n";
}

}else {
  echo "Su contraseña NO tiene numeros \n";
}


?>