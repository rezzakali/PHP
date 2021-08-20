<?php

class Fruit{
    public $name;
    public $color;
    public $weight;

   public function __construct($name,$color,$weight)
    {
        $this->name=$name;
        $this->color=$color;
        $this->weight=$weight;
    }
    public function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}
class Strawberry extends Fruit{
    public function message(){
        echo "I am the class extends of Fruit";
    }
}
$strawberry = new Strawberry("Strawberry","red","300g");
$strawberry->message();
echo "<br>";
$strawberry->intro();






?>