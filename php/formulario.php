


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <title>Document</title>
</head>
<body>
    

    <section>
    <article>
    <div class="contenedor">
    <h1>
    FORMULARIO DE ADOPCION
    </h1>

    <form action="ficha.php" method="post" autocomplete="off">
       <!-- <form action="ficha.php" method="post" autocomplete="off"> -->
        <!-- <form action="mail.php" method="post" autocomplete="off"> -->

<!-- Nombre Animal -->

<div>
<h2>
<?php

// PODEMOS usar $_GET porque cuando nos vamos a una direccion con href, el GET seria como un REQUEST o un POST, en donde el enlace seria como un form, y el GET recibe la informacion de la anterior pagina, es decir, al final el enlace mediante GET recibe la informacion de la pagina anterior.

$nombreAnimal = $_GET['nombre'];
echo($nombreAnimal);
?>
 Te esta esperando
</h2>

<?php
$imagen = $_GET['img'];

// Como vemos pusimos el $_GET de imagen dentro de una variable, para despues hacer un echo de mostrar una imagen en donde reemplazamos la direccion por la direccion o la variable que contiene la propiedad de la imagen del objeto
echo('<img src="../' . $imagen . '">');

// o tambien
?>

<!-- <img src="</?php $imagen ?>" class="Foto"> -->




</div>

        <!-- DNI imagen -->

        <label for="text">
            Pon una imagen de tu DNI
        </label>

        <input type="file" name="dni" accept="image/x-png,image/gif,image/jpeg" />

        <br>

        
        <!-- Nombre -->
        <label for="Nombre"> <!-- para hacer los titulos-->
            Nombre
        </label>
        <!-- input te permite escoger direfente informacion, text en este caso para introducir texto-->
        <input type="text" name="nombre" id="nombre"
         autofocus='autofocus' pattern="[A-Za-z\d\.]{2-}$"  placeholder="Nombre"
        > 
        <br>

        <!-- Apellido -->
        
        <label for="apellidos">
            Apellidos
        </label> 
        <input type="text" name="apellido" id="apellido" 
        placeholder="Ambos Apellidos" pattern="[A-Za-z]{2-48}">

        <br>


        <!-- Email -->
        <label for="Email">
            Email
        </label>
        <input type="email" name="email" id="email"
          pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"  placeholder="ejmplo@ejemplo.com">


          <br>
<!-- Entorno Familiar -->

        <label for="text">
        Entorno familiar:
        </label>
        <input name="comentario" id="comentario" rows="3" >

        <br>

        <!-- Trabaja, si o no?-->

        <label for="text">
        Trabajas?
        </label>

        <input type="checkbox" value="Si" name="trabajosi" id=""> Si
        <input type="checkbox" value="No" name="trabajono" id=""> No


        <br>

<!-- Opinion de los animales-->
        <label for="text">
        Que te gusta mas de tener una mascota:
        </label>
<br>
        <textarea name="" id="" cols="30" rows="5"></textarea>

        <br>


<!-- Historial delictivo -->
        <label for="text">
        Historial delictivo:
        </label>

        <input type="checkbox" name="delictivosi" id=""> Si
        <input type="checkbox" name="delictivono" id=""> No


        <br>

        <!-- Fecha Cita -->
        <label for="text">
       Fecha Cita Adopcion. Escoge tu dia para adoptar:
        </label>

        <input type="date" name="fecha" id=""> 
       
        <br>

        <!-- Comentario -->
        <label for="text">
            Comentarios:
        </label>
        <br>
        <textarea name="comentario" id="comentario" rows="10" >
            
        </textarea>

<!-- Input HIDDEN -->

<input type="hidden" name="boton" value="">

<!-- Enviar -->
        <br>
      <button type="submit" name="envio">
          Enviar
      </button>
        
        <!--- solo te crea un valor, este valor es fijo, no te permite despues colocar otros objetos, y si quieren poner mas cosas ya tienen que ser fuera del inputsubmit-->

            <!-- nos permite crear un boton (<button>), a direfencia del input submit que solo te crea un objeto simple, en cambio el button te permite interactuar mejor ya-->
     
            <br>
<!-- Borrar -->
        <input type="reset" value="
        Borrar"> <!-- este nos permite si es un fomrulario muy largo, nos lo limpia-->

        <br>

       
    <!-- CONDICIONAR A QUE CUANDO LE PRESIONEMOS 'ENVIAR' ESTE NOS CAMBIE POR 'RESERVADO Y CON EL DEBIDO MENSAJE-->

    <?php
// echo('<pre>');
// print_r($_REQUEST);
// echo('</pre>');




    ?>
    </div>
    
    </article>
    
    </section>
</body>
</html>

