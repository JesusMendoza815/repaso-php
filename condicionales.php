<?php
  $edad = 18;

  if ($edad < 18) {
    echo "No cumples con la edad mínima\n";
  } else {
    echo "Bienvenido\n";
  };

  // Shorthand
  $message = "";
  ($edad < 18) ? $message = "Menor de edad" : $message = "Mayor de edad" ;
  echo $message."\n";
?>