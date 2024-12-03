<?php 
require_once 'Vehiculo.php';
require_once 'VehiculoElectrico.php'; 

class Tesla extends Vehiculo implements VehiculoElectrico {

    public function __construct(string $marca, string $modelo, string $color = 'Negro'){

        parent::__construct($marca,$modelo,$color);


    }


    public function mover(){

        echo("La moto se mueve");

    }
    public function detener(){

        echo("La moto se detiene");
        
    }

    public function cargarBateria(){

        echo ("Cargando bateria del tesla");

    }

    public function estadoBateria(){

        echo ("Estado de la bateria: 100%");

    }

}