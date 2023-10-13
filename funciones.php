<?php
  $nombres = ["Juan", "Pedro", "Jesus", "Karla"];

  function saludo($nombre) {
    echo "Bienvenido ".$nombre."\n";
  }

  foreach ($nombres as $key => $value) {
    saludo($value);
  }
?>