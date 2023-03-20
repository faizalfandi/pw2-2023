<?php

    class Fruit {
        //property
        public $name;
        public $color;

        //method
        function getName($name) {
            return $this->name = $name;
        }

        function getColor($color) {
            return $this->color = $color;
        }
    }

    //Object
    $apple = new Fruit();
    echo $apple->getName("Apple");
    echo "<br>";
    echo $apple->getColor("Red");
    
    echo '<br><br>';

    $Banana = new Fruit();
    echo $Banana->getName("Banana");
    echo "<br>";
    echo $Banana->getColor("Yellow");



?>