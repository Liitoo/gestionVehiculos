<?php
require_once 'Coche.php';
require_once 'Vehiculo.php';
require_once 'Camion.php'; 
require_once 'Moto.php'; 
require_once 'Tesla.php'; 
require_once 'Bicicleta.php';
require_once 'Concesionario.php';
require_once 'VehiculoElectrico.php'; 


$coche_1= new Coche("BMW","M3","Negro",5);
$camion_1= new Camion("Ford","F-350 Super Duty","Azul",100);
$moto_1= new Moto("Kawasaki","Ninja","Verde",500);
$tesla_1=new Tesla("Tesla","Model S","Blanco");
$bicicleta_1= new Bicicleta("Flido","C11","Gris");
$concesionario_1=new Concesionario();

echo("<h2>COCHE</h2>");

echo $coche_1->obtenerInformacion();
echo("<br>");

$coche_1->mover();
echo("<br>");

$coche_1->detener();
echo("<br>");

$coche_1->setMarca("Renault")->setModelo("Clio")->setColor("Rojo")->setNumPuertas(4);
echo $coche_1->obtenerInformacion();
echo("<br>");

echo("<h2>CAMIÓN</h2>");

echo $camion_1->obtenerInformacion();
echo("<br>");

$camion_1->mover();
echo("<br>");

$camion_1->detener();
echo("<br>");

$camion_1->setMarca("Mercedes")->setModelo("eACTROS 600")->setColor("Verde")->setCapacidadCarga(10000);
echo $camion_1->obtenerInformacion();
echo("<br>");

echo("<h2>MOTO</h2>");

echo $moto_1->obtenerInformacion();
echo("<br>");

$moto_1->mover();
echo("<br>");

$moto_1->detener();
echo("<br>");

$moto_1->setMarca("Honda")->setModelo("CBR")->setColor("Negro")->setCilindrada(1000);
echo $moto_1->obtenerInformacion();
echo("<br>");

echo("<h2>BICICLETA</h2>");

echo $bicicleta_1->obtenerInformacion();
echo("<br>");

$bicicleta_1->mover();
echo("<br>");

$bicicleta_1->detener();
echo("<br>");

$bicicleta_1->pedalear();
echo("<br>");

$bicicleta_1->setMarca("Canyon")->setModelo("Lux Trail CF8")->setColor("Verde");
echo $bicicleta_1->obtenerInformacion();
echo("<br>");

echo("<h2>TESLA</h2>");

echo $tesla_1->obtenerInformacion();
echo("<br>");

$tesla_1->mover();
echo("<br>");

$tesla_1->detener();
echo("<br>");

$tesla_1->cargarBateria();
echo("<br>");

$tesla_1->estadoBateria();
echo("<br>");

$tesla_1->setMarca("Tesla")->setModelo("Model 3")->setColor("Gris");
echo $tesla_1->obtenerInformacion();
echo("<br>");

echo("<h2>CONCESIONARIO</h2>");

$concesionario_1->mostrarVehiculo($coche_1);
echo("<br>");

$concesionario_1->mostrarVehiculo($camion_1);
echo("<br>");

$concesionario_1->mostrarVehiculo($moto_1);
echo("<br>");

$concesionario_1->mostrarVehiculo($bicicleta_1);
echo("<br>");

$concesionario_1->mostrarVehiculo($tesla_1);


