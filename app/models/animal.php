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

        echo('<div>');
    
        echo('<span>');
        echo('<img src="' . $this->img . '" alt="">');
        echo('</span>');
        
        echo('</div>');

    }

    public function datosanimal() {

        echo('<div>');
       

        echo('<h3>');
        echo('<span>');
        echo('Nombre Animal: ' . $this->nombre);
        echo('</span>');
    echo('</h3>');

        echo('<ul>');
        echo('<li>');
        echo('<span>');
        echo('ID: ' . $this->id);
        echo('</span>');
        echo('</li>');

echo('<li>');
        echo('<span>');
        echo('Color: ' . $this->color);
        echo('</span>');
        echo('</li>');

        echo('<li>');
        echo('<span>');
        echo('Tamaño: ' . $this->tamaño);
        echo('</span>');
        echo('</li>');
        

        echo('<li>');
        echo('<span>');
        echo('Edad Aproximada: ' . $this->edadaprox);
        echo('</span>');
        echo('</li>');

        echo('<li>');
        echo('<span>');
        echo('Peso: ' . $this->peso);
        echo('</span>');
        echo('</li>');

        echo('<li>');
        echo('<span>');
        echo('Raza: ' . $this->raza);
        echo('</span>');
        echo('</li>');


        echo('<li>');
        echo('<span>');
        echo('Actitud: ' . $this->actitud);
        echo('</span>');
        echo('</li>');


        echo('<li>');
        echo('<span>');
        echo('Alimentacion: ' . $this->alimentacion);
        echo('</span>');
        echo('</li>');


        echo('<li>');
        echo('<span>');
        echo('Comentario: ' . $this->comentario);
        echo('</span>');
        echo('</li>');


        echo('<li>');
        echo('<span>');
        echo('Sexo: '. $this->sexo);
        echo('</span>');
        echo('</li>');


        echo('<li>');
        echo('<span>');
        echo('ADOPTAR: ' . '<a href="php/formulario.php">ADOPCIÓN</a>');
        echo('</span>');
        echo('</li>');


    echo('</ul>');
    
    
    echo('</div>');
      

    }
}
?>