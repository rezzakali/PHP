<?php

class Person{
    public $name;
    public $age;
    public $address;
    public $profession;

    function __construct($name,$age,$address,$profession)
    {
        $this->name=$name;
        $this->age=$age;
        $this->address=$address;
        $this->profession=$profession;
    }
    function get_name(){
        return $this->name;
    }
    function get_age(){
        return $this->age;
    }
    function get_address(){
        return $this->address;
    }
    function get_profession(){
        return $this->profession;
    }
}

$details= new Person("Moktadir Alom Ahmed","20","Dhubri","student");

echo $details->get_name();
echo "<br>";
echo $details->get_age();
echo "<br>";
echo $details->get_address();
echo "<br>";
echo $details->get_profession();

?>