<?php

class Lista {
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
    'Luis el carapolla',
    'Alexis',
    'Petro',
    'Alejandro',
    'Fran',
    'Adrian'
];

//Pintar lista de gente
public function drawRandomList($arr)
{   
    shuffle($arr);

    foreach($arr as $value){
    echo '<li> '  .$value .'</li>';
    }
}
}
