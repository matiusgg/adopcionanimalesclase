<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/index.css">
    <title>Document</title>
</head>
<body>
    <h1>
    FORMULARIO DE ADOPCION
    </h1>

    <section>
    <article>
    <div class="contenedor">
        <form action="mail.php" method="post" autocomplete="off">

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
        Entorno familiar
        </label>
        <input name="comentario" id="comentario" rows="3" >

        <br>

        <!-- Trabaja, si o no?-->

        <label for="text">
        Trabajas?
        </label>

        <input type="checkbox" name="trabajosi" id=""> Si
        <input type="checkbox" name="trabajono" id=""> No


        <br>

<!-- Opinion de los animales-->
        <label for="text">
        Que te gusta mas de tener una mascota
        </label>

        <textarea name="" id="" cols="30" rows="5"></textarea>

        <br>


<!-- Historial delictivo -->
        <label for="text">
        Historial delictivo
        </label>

        <input type="checkbox" name="trabajosi" id=""> Si
        <input type="checkbox" name="trabajono" id=""> No


        <br>
        

        <!-- Comentario -->
        <label for="text">
            Comentarios
        </label>
        <textarea name="comentario" id="comentario" rows="10" >
            
        </textarea>

<!-- Enviar -->
        <br>
      <button type="submit">
          Enviar
      </button>
        
        <!--- solo te crea un valor, este valor es fijo, no te permite despues colocar otros objetos, y si quieren poner mas cosas ya tienen que ser fuera del inputsubmit-->

            <!-- nos permite crear un boton (<button>), a direfencia del input submit que solo te crea un objeto simple, en cambio el button te permite interactuar mejor ya-->
     
            <br>
<!-- Borrar -->
        <input type="reset" value="
        Borrar"> <!-- este nos permite si es un fomrulario muy largo, nos lo limpia-->
    </form>
    </div>
    
    </article>
    
    </section>
</body>
</html>

entorno familiar, trabajo si o no( checkbox), direccion adopcion, datos centro adopcion, historial delictivo.