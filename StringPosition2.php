<?php

$offset = 0;

$find = "is";
$find_legth = strlen($find);

$string = "This is a string, and it is an example";

while($string_position = strpos($string,$find,$offset)){
	echo "<b>".$find."</b> found at".$string_position."<br>";
	$offset = $string_position + $find_legth;
}

?>