<?php
require_once 'Vehiculo.php';
final class Bicicleta extends Vehiculo{


    public function __construct(string $marca, string $modelo, string $color = 'Negro'){

        parent::__construct($marca, $modelo, $color);
        
    }

    public function mover(){

        echo("la bicicleta se mueve");

    }
    public function detener(){

        echo("La bicicleta se detiene");
        
    }

    public function pedalear(){

        echo("La bicicleta esta siendo pedaleada");

    }

    public function obtenerInformacion(): string {

        return parent::obtenerInformacion();
        
    }

}