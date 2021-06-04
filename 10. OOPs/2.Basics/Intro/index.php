<?php

/*
Class - 
Object - 


class Car {
  public $comp;
  public $color = 'beige';
  public $hasSunRoof = true;
}

$bmw = new Car ();  // color green
$mercedes = new Car ();  //Color blue


A class holds the methods and properties that are shared by all of the objects that are created from it.

Although the objects share the same code, they can behave differently because they can have different values assigned to them.


*/

class User
{  //Class name is preffered to be singular

}

$userOne = new User();  //Object
$userTwo = new User();

echo 'the class is: ' . get_class($userOne); //PHP function which print what class the object is using

?>

<html lang="en">

<head>
    <title>PHP OOP</title>
</head>

<body>

</body>

</html>