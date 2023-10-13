<?php 
  $varibale1 = 'Soy una variable';
  $nombre = 'Jesús';
  $decimal = 3.3;
  $booleano = false;

  // Forma recomendada de concatenar
  echo 'Hola ' . $nombre;

  // Problemas de seguridad
  echo "Hola $nombre";

  // Obtener tipo de dato
  echo gettype($decimal);

  //Constante
  
?>