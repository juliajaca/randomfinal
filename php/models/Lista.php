<?php

class Lista {



    public $conexion;
 
    public function __construct($servidor, $usuario, $password, $bd){
        $this->conexion = new \mysqli($servidor, $usuario, $password, $bd);
    }

    
    //Props
    public $arrayGente = 
    ['Lolo',
    'Cristian',
    'Jaume',
    'Mateo',
    'Jose',
    'Julia',
    'Jorge',
    'Toni',
    'Jordi',
    'David',
    'Luis',
    'Alexis',
    'Petro',
    'Alejandro',
    'Fran',
    'Adrian'
];

//Pintar lista de gente
public function drawRandomList($arr) {   
    shuffle($arr);

        foreach($arr as $value){
            echo '<li> '  . $value .'</li>';
        }
    }
}
