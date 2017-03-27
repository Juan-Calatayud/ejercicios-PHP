<!-- Crea un sistema que lleve la cuenta del número de visitas que hace
un usuario a la página y se lo muestre. Usa una cookie para llevar la
cuenta de las visitas.
Investiga y comprueba como puedes ver desde tu navegador web la
información sobre las cookies. -->

<?php
  if(isset($_COOKIE['contador'])){
    // Caduca en un año
    setcookie('contador', $_COOKIE['contador'] +2, time() + 5);
    $mensaje = 'Número de visitas: ' . $_COOKIE['contador'];
  }else{
    // Caduca en un año
    setcookie('contador', 1, time() + 5);
    $mensaje = 'Primera visita';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <h1> <?php echo $mensaje; ?></h1>
</body>
</html>