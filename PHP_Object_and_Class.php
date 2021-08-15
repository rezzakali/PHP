<?php

class Names{
    public $firstname;
    public $lastname;
    public $age;

    public function __construct($firstname,$lastname,$age){
        $this->firstname =$firstname;
        $this->lastname =$lastname;
        $this->age=$age;
    }
    public function info(){
        return "My full name is :" . $this->firstname . $this->lastname . " and i am " .$this->age ." years old ";
    }
   
}
$detail=new Names("Roshidul "," Hoque ",20);

echo $detail->info();

?>