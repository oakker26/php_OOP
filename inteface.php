<?php

class Engine {
    public function ignite() {
        echo "Engine is ignited.\n";
    }
    public function start(){
     echo "Car is starting.\n";
    }
    public function stop(){
     echo "Car is stopping.\n";
    }
}

class Car extends Engine {
  
}

// Create an instance of the Car class
$car = new Car();

// Call the methods on the Car object
$car->ignite(); // Output: Engine is ignited.
$car->start();  // Output: Car is starting.
$car->stop();   // Output: Car is stopping.