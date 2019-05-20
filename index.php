<?php
include_once('app/models/Perro.php');
include_once('app/models/Gato.php');
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
    ESCOGE TU PERRO
    </h1>

    <section>
    <article>
  
  
  <?php
echo($guau-> imagen());
  
  echo($guau-> datosanimal());

?>
  
  
    
    </article>

    <article>
    <?php
echo($miau-> imagen());
  
  echo($miau-> datosanimal());

  echo($miau-> entrenado());

?>
  
    </article>
    
    </section>
</body>
</html>