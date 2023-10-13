<?php

  if ($_POST || $_GET) {
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    echo 'Hola '.$nombre.' has enviado tu formulario por: '.$_SERVER['REQUEST_METHOD'].'<br/>';
    echo 'Y tu correo es: '.$email;
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
    <label for="nombre">Nombre: </label>
    <input type="text" placeholder="Ingresa tu nombre" name="nombre" required>
    <br>
    <label for="email">Correo: </label>
    <input type="email" placeholder="Ingresa tu correo" name="email" id="email" required>
    <br>
    <input type="submit" value="Enviar">
  </form>
</body>

</html>