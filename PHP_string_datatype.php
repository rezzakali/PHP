<?php

$x="India";
var_dump($x);

echo "<br>";


$str="I Love india";

echo strlen($str);
echo "<br>";
echo strpos(" I Love india","Love");
echo "<br>";
echo strrev("$str");
echo "<br>";
echo str_replace("india","Bangladesh","I Love india");
echo "<br>";
echo str_word_count("$str");
echo "<br>";
echo "<br>";
echo "<br>";


$num=15487.36598;
var_dump (is_int($num));
echo "<br>";
var_dump (is_float($num));
echo "<br>";

echo(min(124,0.2,104,25,48,7,8,1549));
echo "<br>";
echo(max(21,02,45,78,10,21,36));
echo "<br>";
echo(abs(-6.24));
echo "<br>";

echo(sqrt(8));
echo "<br>";

echo(round(2154.210358));
echo "<br>";
echo(rand(10,50));

echo "<br>";


// constant


define("GREETING","You are welcome",false);
echo GREETING;
echo "<br>";

define("NAME",  "My name is kashim");

function test(){
    echo NAME;
}
test();

?>