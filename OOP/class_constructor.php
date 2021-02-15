<?php
    class Car {
        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        var $door = 4;
        
        // code in the construct function executes automatically without being called
        function __construct() {
            echo $this->wheels = 10;
            
        }

        function CreateDoors() {
            $this->doors = 6;
        }
    }

    $car = new Car();

    $truck = new Car();
    
    $semi = new Car();
    /////////////////////////////////////////////////////////////////
?>