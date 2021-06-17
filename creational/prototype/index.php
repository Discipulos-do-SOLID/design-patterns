<?php

use App\Car;

require_once "./vendor/autoload.php";

$car = new Car('white', 4, 'KFD-6466', '2020');

$car->setNumberOfGears(6);

$secondCar =  $car;
$secondCar->setNumberOfGears(666);
$cloneCar = clone $car;
$cloneCar->setNumberOfGears(8);

echo $car;

// Mesmo ojeto
echo $secondCar;

// Objeto Clonado
echo $cloneCar;

//var_dump($car);
//var_dump($secondCar);
//var_dump($cloneCar);

//dd($car, $secondCar, $cloneCar);
