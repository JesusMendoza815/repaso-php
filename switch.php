<?php
  $opcion = "suma";

  switch ($opcion) {
    case 'suma':
      echo "suma: " . (15 + 5);
      break;

    case 'resta':
      echo "suma: " . (15 - 5);
      break;

    case 'multiplicación':
      echo "multiplicación: " . (15 * 5);
      break;

    default:
      echo "opción invalida";
      break;
  }
?>