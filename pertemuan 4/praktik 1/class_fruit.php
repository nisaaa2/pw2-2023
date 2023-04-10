<?php

    class Fruit {
        //property
        public $name;
        public $color;


        //Method
        function getName($name) {
            return $this->name = $name;
        }

        function getColor($color) {
            return $this->color = $color;
        }


    }

    $apple = new Fruit();
    echo $apple->getName("Apple");
    echo '<br>';
    echo $apple->getColor("Red");

    echo'<br><br>';

    $banana = new Fruit();
    echo $banana->getName("banana");
    echo '<br>';
    echo $apple->getColor("yellow");






    

?>