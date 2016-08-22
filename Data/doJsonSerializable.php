<?php

date_default_timezone_set('America/Los_Angeles');

class Fruit implements JsonSerializable {
    public
        $type = 'Apple',
        $lastEaten = null;

    public function __construct() {
        $this->lastEaten = new DateTime();
    }

    public function jsonSerialize() {
        return [
            'type' => $this->type,
            'lastEaten' => $this->lastEaten->format(DateTime::ISO8601)
        ];
    }
}

echo '<pre>';

echo json_encode(new Fruit()); // with the function above, which outputs: {"type":"Apple","lastEaten":"2013-01-31T11:17:07-0500"}

echo '<br>';

$date = new DateTime();
echo json_encode($date); // normal datetme in JSON, you are normally forced into a specific date object format

echo '</pre>';

?>
