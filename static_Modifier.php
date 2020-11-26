<?php
//For static modifier we donot need any instance we can directly call it from class
class Cars{
    static $wheel_count = 4;
    static $door_count = 4;

    //We can add ststic to methods too
    static function car_details(){
        echo Cars:: $wheel_count . "is the car";
    }
}

$bmw = new Cars();

//echo $bmw->wheel_count;
//This is regular property php would print staTIC PROPERTY
//echo $bmw->door_count;

echo "<br>";
//this is how static modifiers are called
echo Cars::$door_count;


echo "<br>";
//calling method in static
Cars::car_details();

?>