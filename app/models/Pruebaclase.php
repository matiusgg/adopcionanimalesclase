<?php

// Clase (Molde) (Padre)

class pajaro{

// Propiedades
// Es imporntante siempre poner in ID

public $id;
public $color;
private $tamanyo;
protected $peso;
default $medidas; // La Opcion DEFAULT: Si la pones o no, siempre sera DEFAULT a menos que le pongamos algunas de las 4 de arriba: public, private, protected.


// Construcotr: Colocar las propiedades que son importantes y queremos que siempre salgan

public function __construct($id, $color, $tamanyo){

$this->id = $id;
$this->color = $color;
$this->tamanyo = $tamanyo;


}

// Metodos: Metodo es una funcion dentro de la clase, se le llama METODO no funcion, la funcion es cuando no esta dentro de la clase. En los metodos no se pone comunmente parametros dentro del metodo, porque ya con $this->(propiedades) podemos tener las propiedades dentro de esta, aunque podemos usar parametros sin ningun problema.
public function comer($hora) {

    if($hora < 10:00:00){

        $this->color;
    }
}


}


$pajaro01 = new pajaro('123', 'negro', 0123);


// ESTE ARCHIVO ES SOLO UNA PRUEBA Y EXPLICACION, POR LO CUAL TODO IRA JUNTO, PERO CADA CLASE DEBE TENER SU PROPIO ARCHIVO

// Clase (Molde) (Hijo)

// Llamamos al archivo del PADRE-clase PAJARO

// Ejm: require_once('Pajaro.php');

// Con extends recordemos que unimos al PAdre e Hijo. esto es para evitar repetir codigo.

class cuervo extends Pajaro{

    // Propiedades

    // Pero si agreagamos propiedades al hijo, estas propiedades serian exclusivos del hijo, esto tambien pasa con METODOS

    public $tamanyopico;
    public $plumaje;

    // COnstructor

    // Ya en el constructor como se menciono anteriormente, cuando creamos un nuevo constructor, la esctructura del constructor padre se elimina, ya que se sobrepone este nuevo constructor, esto es porque no pueden haber dos constructores entre el padre e hijo. A pesar de esto los datos e contenido del constrcutor del padre no se pierde por lo cual si queremos agregar alguna propiedad del padre que sea importante, para ponerlo en el constructor, Entonces si usariamos PARENT.

    public function __construct($id, $color, $tamanyo, $tamanyopico) {

        // Como vemos recuperamos el contenido de las propiedades importantes del padre en el nuevo constructor. Esto solo lo hariamos cuando queremos agregar cosas imporntantes o propiedades imporntates y especificas del propio hijo, ya que sino hicieramos propiedades propias del hijo, no habria necesidad de hacer esto porque estariamos repitiendo el mismo condigo ya hecho en el padre.

        parent:: __construct($id, $color, $tamanyo)
    }

    // Metodos
}

$cuervo = new cuervo(//Aqui le ponemos dependiendo de lo que tiene el constructor padre, tambien el hijo hereda todo por lo cual no habria problema al colocar en el mismo orden las propiedades que teniamos previamente en el Padre);

$cuervo-> plumaje = 'largo'; // Como vemos las propiedades que no estarian en constructor y por lo tanto no obligatorias o que necesitemos urgente, simplemente llamamos al obejto y su propiedad y le agregamos datos a esa propiedad.
?>