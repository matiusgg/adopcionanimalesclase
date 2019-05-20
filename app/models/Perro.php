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

 $guau = new Perro('017', 'HeeHee', 'img/jerry.jpg', 'cafe', 'eo', '1000años', '1kg', 'rata marron', 'masculino', 'quesitos');


//  echo('<pre>');
//  print_r($guau);
//  echo('</pre>');

?>