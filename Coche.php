<?php

class Coche extends Vehiculo {

    private int $numPuertas;

    public function __construct(string $marca, string $modelo, string $color = "Negro", int $numPuertas){

        parent::__construct($marca,$modelo,$color);

        $this->numPuertas = $numPuertas;

    }

    public function getNumPuertas(): int{

        return $this->numPuertas;
        
    }

    public function setNumPuertas(int $numPuertas): void{

        $this->numPuertas = $numPuertas;

    }

    public function mover(){

    }
    public function detener(){
        
    }

    public function obtenerInformacion(): string {

        return parent::obtenerInformacion() . "Numero de Puertas: {$this->numPuertas}";
        
    }

}