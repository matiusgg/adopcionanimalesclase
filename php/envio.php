<?php

// validacion por email, recordemos que con POST podemos ver la informacion que recibiamos
if(isset($_POST['email'])){

// nuestro email y asunto, en donde nos envien los datos.

$miEmail = '
newpowerexperience2016@gmail.com';

$miAsunto = 'Correo Adopcion Animal';

// datos del formulario

$var_nombre = $_POST['nombre'];
$var_apellidos = $_POST['apellido'];
$var_email = $_POST['email'];
$var_comentario = $_POST['comentario'];
$var_historialcriminal  = $_POST[];


// si queremos albergar todos los datos que vimos anteriormente del formulario en $mensaje


$mensaje = 'Contenido del mensaje.\h\n';


$mensaje .= 'nombre' . $var_nombre . '\n';

$mensaje .= 'apellido' . $var_apellidos . '\n';
$mensaje .= 'email' . $var_email . '\n';
$mensaje .= 'comentario' . $var_comentario . '\n';

echo($mensaje); //cuando nos muestre el echo de $mensaje, nos tiene que aparecer los datos. \h sirve en php, no en htlm por lo cual cuando lo veamos en el navegador sera todo en una linea

// como vemos usamos .= porque queremos concatenar los datos en la variable $mensaje

$encabezado = 'From: ' . $var_email . "\r\n" . 'Reply-To: ' . $var_email . "\r\n" . 'X-Mailer: PHP/' . phpversion(); // reply-to: la persona que recibio el email. from: de la persona que introdujo el email, el que nos lo envio, X-Mailer: la version de php que usamos, esto es por el servidor. El encabezado debe ir antes de la funcion de enviar email @mail


// Ahora la opcion para enviar el email

@mail($miEmail, $miAsunto, $mensaje, $encabezado);

// Encabezado del email. con esta forma la persona va a poder responder


// Mensaje final

echo('Gracias por contactar con nostros, en menos de 48h tendra una respuesta');

};
