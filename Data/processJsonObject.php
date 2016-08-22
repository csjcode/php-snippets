<?php
// ENCODING JSON - OBJECT, NESTED OBJECT

class User {
    public $city = "";
    public $country  = "";
    public $time = "";
}

$user = new User();
$user->city = "Paris";
$user->country  = "France";

// Returns: {"city":"Paris","country":"France"}
json_encode($user);

$user->time = new DateTime();

/* Returns:
{
    "city": "Paris",
    "country": "France",
    "time": {
        "date": "2016-08-22 04:05:38.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    }
}
*/
$output = json_encode($user,JSON_PRETTY_PRINT);

echo '<pre>' . $output . '</pre>';


 ?>
