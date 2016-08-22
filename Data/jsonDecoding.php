<?php

// DECODING JSON - BASICS

$string = '{"France": "Paris", "USA": "Washington DC"}';
$result = json_decode($string);
// $result = json_decode($string,true); // get back associative array result

// Result: object(stdClass)#1 (2) { ["France"]=> string(3) "Paris" ["USA"]=> string(4) "Washington DC" }

echo '<pre>';
var_dump($result);
// Prints "Paris"
echo $result->France . '<br>';
// Prints "Washington DC"
echo $result->USA;


// DECODING JSON - BASICS - DIFFERENT LEVELS OF NESTING


$mystring = '{"France": {"Paris": {"food": "Camembert cheese"}}}';
$myresult = json_decode($string, true, 2);

// Result: null
var_dump($myresult);

echo '</pre>';


?>
