<?php

  if ($_POST || $_GET) {
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $year = $_POST['year'];
    $terms = $_POST['terms'];

    echo 'Hola '.$nombre." has enviado tu formulario por: ".$_SERVER['REQUEST_METHOD'];
  };

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <input type="text" placeholder="Ingresa tu nombre" name="nombre" required>
    <br>
    <label for="sexo">Hombre</label>
    <input type="radio" name="sexo" value="hombre" id="sexo" required>
    <br>
    <label for="sexo">Mujer</label>
    <input type="radio" name="sexo" value="mujer" id="sexo" required>
    <br>
    <select name="year" id="year" required>
      <option value="2000">2000</option>
      <option value="2001">2001</option>
      <option value="2002">2002</option>
    </select>
    <br>
    <label for="terms">Terminos y condiciones</label>
    <input type="checkbox" name="terms" id="terms" required>
    <br>
    <input type="submit" value="Enviar">
  </form>
</body>

</html>