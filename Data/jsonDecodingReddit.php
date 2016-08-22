<?php

// DECODING JSON - BASICS - DIFFERENT LEVELS OF NESTING

$mystring = file_get_contents('data-json/data-redditsample1.json');
// $mystring = '{"France": {"Paris": {"food": "Camembert cheese"}}}';

// $myresult = json_decode($mystring); // object
$myresult = json_decode($mystring,true); // array

echo '<pre>';

// Result: null
var_dump($myresult);

echo '</pre>';

?>
