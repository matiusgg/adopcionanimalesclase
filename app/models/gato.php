<?php

require_once('Animal.php');

class Gato extends Animal{

// PROPIEDADES

public $entrenado = 'No generalmente';


// Constructor



// Metodos

public function entrenado() {

    if(isset($this->entrenado)){

echo('Entrenamiento: ' . $this->entrenado);


    }

}
 }

 // MIAU OBJETO 1

 $miau = new Gato('017', 'HeeHee', 'img/jerry.jpg', 'cafe', 'eo', '1000años', '1kg', 'rata marron', 'masculino', 'quesitos');
$miau-> entrenado = 'No esta entrenado';
$miau-> comentario = 'khe verga';

// gato persa OBJETO 2

$gatopersa = new Gato('016', 'EOOO', 'img/gatopersa.jpg', 'dorado', 'mediano', '11años', '9kg', 'persa', 'masculino', 'atunes');
$gatopersa-> entrenado = 'Moderadamente entrenado';
$gatopersa-> cometario = 'Experto en arañar sofas y en traerte tu comida';

// SOPRENDIDO OBJETO 3

$sorprendido = new Gato('015', 'Surprise', 'img/sorprendido.jpg', 'blanco', 'pequeño pero feroz', '3años', '5kg', 'desconocida', 'femenino', 'alimento para gatos');
$sorprendido-> entrenado = 'Moderadamente entrenado';
$sorprendido-> cometario = 'Perfecto para sorepnderte cuando mas lo necesitas';



?>