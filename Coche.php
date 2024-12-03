<?php
require_once 'Vehiculo.php';
class Coche extends Vehiculo {

    private int $numPuertas;

    public function __construct(string $marca, string $modelo, string $color = "Negro", int $numPuertas){

        parent::__construct($marca,$modelo,$color);

        $this->numPuertas = $numPuertas;

    }

    public function getNumPuertas(): int{

        return $this->numPuertas;
        
    }

    public function setNumPuertas(int $numPuertas): self{

        $this->numPuertas = $numPuertas;
        return $this;

    }

    public function mover(){

        echo("El coche se mueve");

    }
    public function detener(){

        echo("El coche se detiene");
        
    }

    public function obtenerInformacion(): string {

        return parent::obtenerInformacion() . ", Numero de Puertas: {$this->numPuertas}";
        
    }

}