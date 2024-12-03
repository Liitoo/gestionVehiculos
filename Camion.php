<?php
require_once 'Vehiculo.php';
class Camion extends Vehiculo {

    private float $capacidadCarga;

    public function __construct(string $marca, string $modelo, string $color = "Negro", float $capacidadCarga){

        parent::__construct($marca,$modelo,$color);

        $this->capacidadCarga = $capacidadCarga;

    }

    public function getCapacidadCarga(): float{

        return $this->capacidadCarga;
        
    }

    public function setCapacidadCarga(float $capacidadCarga): Camion{

        $this->capacidadCarga = $capacidadCarga;
        return $this;

    }

    public function mover(){

        echo("El camion se mueve");

    }
    public function detener(){

        echo("El camion se detiene");
        
        
    }

    public function obtenerInformacion(): string {

        return parent::obtenerInformacion() . ", Capacidad de Carga: {$this->capacidadCarga}";
        
    }
}