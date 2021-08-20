<?php

class Person{
    public $name;
    public $age;
    public $address;

    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }

    function set_age($age){
        $this->age=$age;
    }
    function get_age(){
        return $this->age;
    }
    function set_address($address){
        $this->address=$address;
    }
    function get_address(){
        return $this->address;
    }
}

$man=new Person();
$man->set_name("Rezzak Ali");
$man->set_age("20");
$man->set_address("Goalpara");


echo $man->get_name();
echo "<br>";
echo $man->get_age();
echo "<br>";
echo $man->get_address();




?>