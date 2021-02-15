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
    
    /////////////////////////////////////////////////////////////////
    class Plane extends Car{
        var $wheels = 20;
    }

    $jet = new Plane();

    echo $jet->wheels;
    $jet -> MoveWheels();

    // if(class_exists('Plane')) {
    //     echo "it does exist";
    // }
?>