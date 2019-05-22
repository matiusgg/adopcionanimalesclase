<?php

require_once('Animal.php');

class Perro extends Animal{

// PROPIEDADES

//public $levantarpata;



// Constructor

// No hay necesidad de poner PARENT: Porque parent solo lo usamos cuando vamos agregar nuevas propiedades a la subclase en el constructor de la subclase, ya que si ponemos PARENT sin agregar nuevos propiedades, estariamos repitiendo el constructor y el codigo anterior del PAdre-clase. Lo cual no queremos repetir codigo.
// Ademas, si creamos un nuevo constructor dentro de la Subclase, el constructor de PAdre-clase se 'elimina', para ello, como se menciono anteriormente se crean porpiedades para usarlas en constructor. Ahora nos hacemos la pregunta. Queremos usar los datos del constructor de padre? lo necesitamos?. Si es asi usamos PARENT, sino, pues no lo usamos. La clase-hijo nos permite decidir.
// COUNCLUSION: Si no tengo nada que aportar, no modifico nada.

// parent::_construct(propiedad de la clase padre, pueden ser varias propiedades ejm: $imagen, $nombre, $raza, $sexo, $color, $años);
// $this-<(nueva porpiedad) = (nueva propiedad);




// Metodos



        
 }

 // GUAU OBJETO 1

 $guau = new Perro('09', 'alberto', 'img/perro.jpg', 'amarillo', 'grande', '15años', '33kg', 'nose', 'masculino', 'moderada');
 $guau-> estado = 'No esta adoptado';

 // UGANDA OBJETO 2

 $uganda = new Perro('018', 'do you know the way?', 'img/uganda.jpg', 'rojo', 'pequeño', '15años', '1kg', 'ugandiana', 'masculino', 'come de todo');
 $uganda-> comentario = 'Hecho con las propias manos de la reina MY QUEEN';
 $uganda-> estado = 'Reservado';

 // PERRO SIBERIANO OBJETO 3

 $perrosiberiano = new Perro('020', 'Tobi', 'img/perrosiberiano.jpg', 'blanco', 'grande', '5años', '9kg', 'Perro Siberiano', 'femenino', 'moderada y saludable alimentacion');

 $perrosiberiano-> comentario = 'Perro siberiano muy jugueton y amigable';
 $perrosiberiano-> estado = 'No esta adoptado';


//  echo('<pre>');
//  print_r($guau);
//  echo('</pre>');

?>