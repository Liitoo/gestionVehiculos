<?php
abstract class Vehiculo {
    protected string $marca;
    protected string $modelo;
    protected string $color;
 
 
    public function __construct(string $marca, string $modelo, string $color = "Negro") {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }
 
    public function getMarca(): string{

        return $this->marca;

    }

    public function setMarca(string $marca): self{

        $this->marca = $marca;
        return $this;

    }

    public function getModelo(): string{

        return $this->modelo;
        
    }

    public function setModelo(string $modelo): self{

        $this->modelo = $modelo;
        return $this;

    }

    public function getColor(): string{

        return $this->color;
        
    }

    public function setColor(string $color): self{

        $this->color = $color;
        return $this;

    }
 
    abstract public function mover();
    abstract public function detener();

 
 
    public function obtenerInformacion(): string {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Color: {$this->color}";
    }

    public function __toString(): string {
        return $this->obtenerInformacion();
    }

    public function __get($marca) {
         return $this->$marca;
         
    }
}