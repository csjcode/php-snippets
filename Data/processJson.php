<?php

// ENCODING JSON - SIMPLE ARRAY

$arrCountries = array("Argentina", "USA", "France");
$output = json_encode($arrCountries);

echo '<div>' . $output . '</div>'; // Returns on JSON ofrmat : ["Argentina","USA","France"]

// ENCODING JSON - SIMPLE ARRAY KEY-VALUE

$arrCountriesKeys = array("Argentina"=>"South America", "USA"=>"North America", "France"=>"Europe");
$output = json_encode($arrCountriesKeys);

echo '<div>' . $output . '</div>';




 ?>
