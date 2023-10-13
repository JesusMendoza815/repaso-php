<?php
  $nombres = ["Juan", "Pedro", "Jesus", "Karla"];

  function saludo($nombre = "Indefinido") {
    $message =  "Bienvenido ".$nombre."\n";
    return $message;
  }

  foreach ($nombres as $key => $value) {
    echo saludo($value);
  }
?>