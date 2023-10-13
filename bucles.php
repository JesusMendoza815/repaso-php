<?php

  // For
  for ($i = 1; $i <= 10; $i++) {
    echo $i."\n";
  }

  // While
  $limite = 0;
  while ($limite <= 10) {
    echo $limite.": while\n";
    $limite++;
  }

  // Foreach
  $arreglo = array("Juan", 1, false, 3.3);
  foreach ($arreglo as $key => $value) {
    echo $value."\n";
  }
?>