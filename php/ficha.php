<?php
// COMO AUN NO USAMOS EMAIL, AQUI LLEGARAN LOS DATOS DEL FORMULARIO


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

?>

<button type="submit">
    Volver
    <a href="../index.php">ADOPTAR DE NUEVO</a>
</button>
    </div>
    </section>
</body>
</html>