<?php
  // Evitar inyección de código
  htmlspecialchars("<?php?>");

  // Quitar espacios al inicio y final
  echo trim(" Hola ")."\n";

  // Regresa el número de caracteres
  echo strlen("hay 17 caracteres")."\n";

  // Extraer partes de una cadena por caracteres
  echo substr("Hola Juan", 0, 4)."\n";

  // Mayusculas y minusculas
  echo strtoupper("hola a mayusculas")."\n";
  echo strtolower("HOLA A MINUSCULAS")."\n";

  // Busqueda de caracteres
  echo strpos("Busqueda hola gatp", "gato")."\n";  
?>