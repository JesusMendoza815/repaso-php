<?php 
  $varibale1 = 'Soy una variable';
  $nombre = 'Jesús';
  $decimal = 3.3;
  $booleano = false;

  // Forma recomendada de concatenar
  echo 'Hola ' . $nombre . "\n";

  // Problemas de seguridad
  echo "Hola $nombre \n";

  // Obtener tipo de dato
  echo gettype($decimal) . "\n";

  //Constante, su valor no podrá cambiar
  define('PI', 3.1416);
  echo PI . "\n";
?>