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

$miau = new Gato('016', 'alberto', 'img/perro.jpg', 'amarillo', 'grande', '15años', '33kg', 'nose', 'masculino', 'moderada');
$miau-> entrenado = 'No esta entrenado';
?>