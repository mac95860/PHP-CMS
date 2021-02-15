<?php
    class Car {
        //same is var
        public $wheels = 4;
        //can be used in the class or any class that extends it
        protected $hood = 1;
        //only available in this class
        private $engine = 1;
        var $door = 4;
        
        // code in the construct function executes automatically without being called
        function showProperty() {
            echo $this->hood;
            echo $this->$engine;
        }
    }

    $car = new Car();
///////////////////////////////////////////////////////////////////////////////////////
    class Semi extends Car{
        
    }

    $semi = new Semi();

    echo $car->showProperty();
    // echo $semi->showProperty();
   
?>