<?php
//String Operation
$a= "WE are Learning php"; // define a string
echo ($a).'<br/>';  // print a string
echo strlen($a).'<br/>'; // print length of a string
echo str_word_count($a).'<br/>'; // print no of words in a string
echo strrev($a).'<br/>'; //reverse a string
echo strpos($a,"php").'<br/>'; // search for a word in a string
echo str_replace("php","js", $a); //replace a word in a string
echo "<br>";
//defining constants
define("Greeting"," Welcome to PHP",true);
echo greeting;
echo "<br>";
// implementation of logical operator and if- else condition
$x = 100;  
$y = 50;

if ($x == 100 && $y == 80) {
    echo "I am good in PHP";
}
elseif($x == 100 && $y == 50){
	echo "I am good in JS";
}
else{
	echo "I am good in none";
}
?>