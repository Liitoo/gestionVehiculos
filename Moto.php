<?php
require_once 'Vehiculo.php';
class Moto extends Vehiculo {

    private int $cilindrada;

    public function __construct(string $marca, string $modelo, string $color = "Negro", int $cilindrada){

        parent::__construct($marca,$modelo,$color);

        $this->cilindrada = $cilindrada;

    }

    public function getCilindrada(): int{

        return $this->cilindrada;
        
    }

    public function setCilindrada(int $cilindrada): Moto{

        $this->cilindrada = $cilindrada;
        return $this;

    }

    public function mover(){

        echo("La moto se mueve");

    }
    public function detener(){

        echo("La moto se detiene");
        
    }

    public function obtenerInformacion(): string {

        return parent::obtenerInformacion() . ", Cilindrada: {$this->cilindrada}";
        
    }
}