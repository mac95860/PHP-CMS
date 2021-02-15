<?php
    class Dog {
        public $ears = 2;
        public $eye_colors = 'brown';
        public $furColor = 'beige';

        function showAll() {
            echo $this->ears;
            echo $this->eye_colors;
            echo $this->furColor;
        }
    }

    $pug = new Dog();
    $pug->showAll();
?>