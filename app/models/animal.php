<?php

// SUPERCLASE: BAse de donde se crearan mas 

class Animal {

    // PROPIEDADES

    public $img;
    public $nombre;
    public $id;
    public $color;
    public $tamaño;
    public $edadaprox = 'N/A';
    public $peso;
    public $raza;
    public $sexo;
    public $actitud = 'normal';
    public $alimentacion;
    public $comentario = 'Nada que destacar';
    public $enfermedad = 'Estado no enfermo';
    // Si esta adoptado o no
    public $estado;
    

    // Constructor

    public function __construct($id, $nombre, $img, $color, $tamaño, $edadaprox, $peso, $raza, $sexo, $alimentacion){

    
        $this->id = $id;
        $this->nombre = $nombre;
        $this->img = $img;
        $this->color = $color;
        $this->tamaño = $tamaño;
        $this->edadaprox = $edadaprox;
        $this->peso = $peso;
        $this->raza = $raza;
        $this->sexo = $sexo;
       $this->alimentacion = $alimentacion;
       
        
    }

    // METODOS

    public function imagen() {

        echo('<div class="imagen">');
    
        
        echo('<img src="' . $this->img . '" alt="">');
        
        
        echo('</div>');

    }

    public function datosanimal() {

        echo('<div class="datosanimal">');
       

        echo('<ul>');
        echo('<li>');

        
        
        
        echo('Nombre Animal: ' . '<span>' . $this->nombre . '</span>');

        
        
        echo('</li>');

        
        echo('<li>');

        
        
        echo('ID: ' . '<span>' . $this->id . '</span>');

        
        
        echo('</li>');

echo('<li>');


        
        echo('Color: ' . '<span>' . $this->color . '</span>');

        
        
        echo('</li>');

        echo('<li>');

        
        
        echo('Tamaño: ' . '<span>' . $this->tamaño . '</span>');

        
        
        echo('</li>');
        

        echo('<li>');

        
        
        echo('Edad Aproximada: ' . '<span>' . $this->edadaprox . '</span>');

        
        
        echo('</li>');

        echo('<li>');

        
        
        echo('Peso: ' . '<span>' . $this->peso . '</span>');

        
        
        echo('</li>');

        echo('<li>');

        
        
        echo('Raza: ' . '<span>' . $this->raza . '</span>');

        
        
        echo('</li>');


        echo('<li>');

        
        
        echo('Actitud: ' . '<span>' . $this->actitud . '</span>');

        
        
        echo('</li>');


        echo('<li>');

        
        
        echo('Alimentacion: ' . '<span>' . $this->alimentacion . '</span>');

        
        
        echo('</li>');


        echo('<li>');

        
        
        echo('Comentario: ' . '<span>' . $this->comentario . '</span>');

        
        
        echo('</li>');


        echo('<li>');

        
        
        echo('Sexo: '. $this->sexo . '</span>');

        
        
        echo('</li>');

        echo('</li>');


        echo('<li>');

        
        
        echo('Esta Adoptado?: ' . '<span>' . $this->estado . '</span>');

        
        
        echo('</li>');

        echo($this-> boton());


        // echo('<li>');

        // Aca lo que hicimos fue mediante el enlace, agregarle informacion que queremos de las propiedades, como puedes ver concatenamos en este caso el nombre y la imagen. Esta informacion la podemos mostrar en la pagina del link mediante el $_GET, aunque tambien nos sirve $_POST y $_REQUEST.
        // Como vemos le pusimos 'botton' para que nos pueda dejar entrar al link.

        // echo('<li class="botton"> <a href="php/formulario.php?nombre=' . $this->nombre . '&img=' . $this->img . '&adoptado=' . $this->adoptado . '">ADOPCION</a>');
      
        
        // echo('ADOPTAR: ' . '<a href="php/formulario.php">ADOPCIÓN</a>');
        
    //     echo('</li>');


    echo('</ul>');
    
    
    echo('</div>');
      

    }

    public function boton() {

   

        

        // USAMOS UN SWITCH porque lo que queremos en esta funcion del boton es que si algunos animales estan en resarva, enfermos o disponibles, nos salga en el boton cual es su estado. Para aquellos que estan en RESERVA o ENFERMOS, les anulamos el <a href> para que no nos deje entrar a la siguiente pagina, simplemente le quitamos 'href' del <a>. A su vez, cuando creemos los objetos y le demos datos a la propiedad de $objeto->estado, este debe llamarse igual que en el 'case' para que de. Ademas dentro del SWITCH, debe ir aquella propiedad que queremos que en los cases nos haga diversas condiciones.

        //En los 'cases' del SWITCH, deben llamarse igual que en los datos o valores que les demos en $objeto->propiedad(que pusimos dentro del SWITCH) para que se tengan cuenta al momento de hacer los 'cases'.

        switch($this->estado){

            case 'ADOPTAR':

            // Aca lo que hicimos fue mediante el enlace, agregarle informacion que queremos de las propiedades, como puedes ver concatenamos en este caso el nombre y la imagen, y el estado( esta propiedad lo que queremos tambien es recopilarla pero para que despues que volvamos al index, ya nos aparezca el boton como 'RESERVADO'). Esta informacion la podemos mostrar en la pagina del link mediante el $_GET, aunque tambien nos sirve $_POST y $_REQUEST.
        // Como vemos le pusimos 'botton' para que nos pueda dejar entrar al link.

            echo('<li class ="boton" style="background-color: red"> <a href="php/formulario.php?nombre=' . $this->nombre . '&img=' . $this->img . '&estado=' . $this->estado . '">ADOPTAR</a> </li>');
            break;

            case 'ENFERMO':

            echo('<li class ="boton" style="background-color: black"> <a>ENFERMO</a> </li>');
            break;

            case 'RESERVADO':

            echo('<li class ="boton" style="background-color: green"> <a >RESERVADO</a> </li>');
            break;

        
        }
      
        
        // echo('ADOPTAR: ' . '<a href="php/formulario.php">ADOPCIÓN</a>');
   
 
    }

    public function estadoactual($nuevoestado){

        $this->estado = $nuevoestado;
    }


}
?>