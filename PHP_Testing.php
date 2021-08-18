<?php


$x=6789;
var_dump($x);

echo "<br>";

define("GREETING","Good Morning");
echo GREETING;
echo "<br>";

$favcolor="purple";

    switch($favcolor){
        case "red":
            echo "Your favourite color is: red!";
            break;
        case "yellow":
            echo "Your favourite color is: yellow!";
            break;
        case "blue":
            echo "Your favourite color is: blue";
            break;
        case "pink":
            echo "Your favourite color is: pink";
            break;
        default:
            echo "There is no color whice is your favourite";
            break;
    }



?>