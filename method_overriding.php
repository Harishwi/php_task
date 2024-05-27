<?php
class Vehicle {
    public function startEngine() {
        echo "The vehicle's engine starts with a generic key.\n";
    }
}
class Car extends Vehicle {
    public function startEngine() {
        echo "The car's engine starts with a push button.\n";
    }
}
class Bike extends Vehicle {
    public function startEngine() {
        echo "The bike's engine starts with a kick start.\n";
    }
}
$genericVehicle = new Vehicle();
$car = new Car();
$bike = new Bike();

$genericVehicle->startEngine();
$car->startEngine();
$bike->startEngine();
?>
