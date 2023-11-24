<?php
function passwordHasSecurityLong ($pass) {
  return strlen($pass) >= 8;  
}

function hasUpperLetter($pass) {
  $arrayPass = str_split($pass);
  
  foreach ($arrayPass as $letter) {
    if ($letter == strtoupper($letter)) {
      return true;
    }
  }
    return false;      //boolean
}

function hasNumber ($pass) {
  $arrayPass = str_split($pass);
  
   foreach ($arrayPass as $letter) {
    if (is_numeric($letter)) {
      return true;
    }
   }  
    return false ;       //boolean
}



?>