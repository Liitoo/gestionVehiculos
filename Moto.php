<?php

class Moto extends Vehiculo {

    private int $cilindrada;

    public function __construct(string $marca, string $modelo, string $color = "Negro", int $cilindrada){

        parent::__construct($marca,$modelo,$color);

        $this->cilindrada = $cilindrada;

    }

    public function getCilindrada(): int{

        return $this->cilindrada;
        
    }

    public function setCilindrada(int $cilindrada): void{

        $this->cilindrada = $cilindrada;

    }

    public function mover(){

    }
    public function detener(){
        
    }

    public function obtenerInformacion(): string {

        return parent::obtenerInformacion() . "Cilindrada: {$this->cilindrada}";
        
    }
}