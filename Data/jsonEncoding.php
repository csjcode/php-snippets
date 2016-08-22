<?php

// ENCODING JSON - SIMPLE ARRAY

$arrCountries = array("Argentina", "USA", "France");
$output = json_encode($arrCountries, JSON_PRETTY_PRINT);

echo '<pre>' . $output . '</pre>'; // Returns on JSON ofrmat : ["Argentina","USA","France"]

// ENCODING JSON - SIMPLE ARRAY KEY-VALUE

$arrCountriesKeys = array("Argentina"=>"South America", "USA"=>"North America", "France"=>"Europe");
$output = json_encode($arrCountriesKeys, JSON_PRETTY_PRINT);

echo '<pre>' . $output . '</pre>';

// ENCODING JSON - WITH BITMASK FLAGS - force string numbers to numeric and convert array to object

// Returns: {"0":"Star Wars","1":1978}
$output = json_encode(array("Star Wars", "1978"), JSON_NUMERIC_CHECK | JSON_FORCE_OBJECT);

echo '<pre>' . $output . '</pre>';

 ?>
