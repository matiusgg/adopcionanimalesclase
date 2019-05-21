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


        echo('<li>');

        // Aca lo que hicimos fue mediante el enlace, agregarle informacion que queremos de las propiedades, como puedes ver concatenamos en este caso el nombre y la imagen. Esta informacion la podemos mostrar en la pagina del link mediante el $_GET

        echo('<li class="botton"> <a href="php/formulario.php?nombre=' . $this->nombre . '&img=' . $this->img . '">ADOPCION</a>');
      
        
        // echo('ADOPTAR: ' . '<a href="php/formulario.php">ADOPCIÓN</a>');
        
        echo('</li>');


    echo('</ul>');
    
    
    echo('</div>');
      

    }
}
?>