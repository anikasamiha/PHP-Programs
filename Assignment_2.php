<?php
//indexed array
$course=array("PHP","Javascript","Mysql");
$arrlen=count($course); // length of an array
//for loop in an array
for($i=0;$i<$arrlen;$i++)
{
  echo ($course[$i]);
  echo "<br>";
}
echo "<br>";
$c1=array_keys($course);
$c2=array_values($course);
$c=array_combine($c1,$c2);//combining key value pairs
print_r($c);
echo "<br>";

//Associative Array
$section=array("Anika" => "A", "Raisa" => "B", "Tuba" => "C");
//printing each key with values
foreach($section as $x => $y){
	echo "Keys =" . $x .", Values =" .$y;
	echo "<br>";
}
//Array_Map function
$array = array(1,2,3);
function cube($n){
	return $n*$n*$n;
}
$map=array_map('cube', $array);
echo "<br>";
print_r($map);
?>