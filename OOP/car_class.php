<?php
    class Car {
        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        var $door = 4;

        function MoveWheels() {
            $this->wheels = 10;
            echo "wheels are moving";
        }

        function CreateDoors() {
            $this->doors = 6;
        }
    }

    $car = new Car();
    $truck = new Car();
    //$car->MoveWheels();
    echo $car->wheels . "<br>";
    echo $truck->wheels = 10 . "<br>";
    $truck->CreateDoors();
    echo $truck->doors;
?>

