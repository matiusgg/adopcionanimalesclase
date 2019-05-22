<?php
// COMO AUN NO USAMOS EMAIL, AQUI LLEGARAN LOS DATOS DEL FORMULARIO

$estadoactual = $_GET['boton'];
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

    <div>

<?php
// echo('<pre>');
// print_r($_REQUEST);
// echo('</pre>');

foreach($_REQUEST AS $key => $valor) {

    if($key == 'envio'){

        echo('OK Su cita ya esta reservada' . '<br>');

        echo('Animal RESERVADO, esperamos su pronta visita para adoptar' . '<br>');
        
    }else if($valor != ""){
    
    echo('Datos de su cita: ' . $key . ' = ' . $valor  . '<br>');
} 
}

// Aqui lo que hicimos fue crear una variuable en donde almacenamos el $_GET del input 'HIDDEN'. Para que despues aqui en el URL, el 'estadoactual' lo enviemos al index, para recopilarlo con $_GET y poder hacer el bucle de foreach

echo('<a href="../index.php?estadoactual=' . $estadoactual . '">VOLVER ADOPTAR</a>');



?>

<button type="submit">
    Volver
    <a href="../index.php">ADOPTAR DE NUEVO</a>
</button>
    </div>
    </section>
</body>
</html>