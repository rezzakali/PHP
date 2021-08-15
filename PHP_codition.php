<?php

// if..else and if...elseif condition
$date=Date("H");
if($date<"10"){
    echo "Good morning";
}elseif($date<"20"){
    echo "Have a nice day";
}else{
    echo "Have a good night";
}

echo "<br>";

// switch


$favcolor="red";

    switch($favcolor){
        case "red":
            echo "Your fovourite color is red";
            break;

            case "green":
                echo "Your favourite color is green";
                break;
            
            case "yellow":
                echo "Your favourite color is yellow";
                break;

            case "pink":
                echo "Your favourite color is pink";
                break;

            default:
                echo "There is no color whice is favourite of you";
                break;
    }

    echo "<br>";
    echo "<br>";


// Loops

// while loop


$x=1;
while($x<=15){
    echo "The number is : $x <br>";
    $x++;
}
echo"<br>";
// function

function message(){
    echo "I am in london";
}
message();

echo"<br>";
echo"<br>";

function details($firstname,$lastname){
    return "FullName:" . $firstname ." " . $lastname;
}
echo details("Rofik","Ali");




?>