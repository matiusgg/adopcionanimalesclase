<?php
include_once('app/models/Perro.php');
include_once('app/models/Gato.php');

$objetos = [
  $guau,
  $uganda,
  $perrosiberiano,
  $miau,
  $gatopersa,
  $sorprendido
]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <h1>
    ESCOGE TU PERRO O GATO
    </h1>

    <section>
    
  
  
  <?php

  // PERROS
  foreach($objetos AS $key => $valor) {
    echo('<article>');
    echo($valor-> imagen());
    echo($valor-> datosanimal());
    echo('</article>');
  }


?>
  
  

    
    </section>
</body>
</html>