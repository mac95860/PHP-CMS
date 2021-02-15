<?php
    class Car {
        //same is var
        public $wheels = 4;
        //can be used in the class or any class that extends it
        protected $hood = 1;
        //only available in this class
        private $engine = 1;
        //static properties are attached to the Class and not to the instance of the class
        static $windows = 6;

        var $door = 4;
        
        // code in the construct function executes automatically without being called
        function showProperty() {
          Car::$windows = 10;
        }
    }

    $car = new Car();
    Car::showProperty();
    echo Car::$windows;
?>