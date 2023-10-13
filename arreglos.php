<?php
 $semana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sabado", "Domingo");

 echo $semana[1] . "\n";

//  Arreglo asociativo
 $persona = array('nombre' => 'Jesús', 'edad' => 12, 'pais' => 'México');

 echo $persona['nombre']." vive en ".$persona['pais']."\n"; 

  // Arreglo multidimensional
  $amigos = array(
    array('Alejandro', 20), 
    array('Pedro', 25),
    array('Cesar', 22),
  );

  echo $amigos[0][0] . " tiene " . $amigos[0][1] . " años\n";

  // Obtener numero de elementos
  echo count($semana) . "\n";
  echo "Último día: ".$semana[count($semana)-1]. "\n";

  foreach ($semana as $key => $value) {
    echo $key.": ".$value."\n";
  }

  // Ordenamineto
  $numeros = array(6,4,12,111,7,1,8,2);
  sort($numeros);
  foreach ($numeros as $key => $value) {
    echo $value."\n";
  }
?>