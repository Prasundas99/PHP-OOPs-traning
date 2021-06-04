<?php

//Properties --  variable of class they describe the class
//Methods are like Function in OOPs

/*
class Car {
  public $comp;   <- Property
  public $color = 'beige';
  public $hasSunRoof = true;
}

*/

class User
{

  public $username = 'Prasun';
  public $email = 'Prasun@Prasun.com';

  public function addFriend()
  { // method
    //return "added a new friend";
    return "$this->username just added a new friend";
  }
}

$userOne = new User();
$userTwo = new User();

echo $userOne->username . '<br>';
echo $userOne->email . '<br>';
echo $userOne->addFriend() . '<br>';

$userTwo->username = 'hope';
$userTwo->email = 'hope@hope.com';

echo $userTwo->username . '<br>';
echo $userTwo->email . '<br>';

//print_r(get_class_vars('User'));
print_r(get_class_methods('User'));


?>

<html lang="en">

<head>
  <title>PHP OOP</title>
</head>

<body>

</body>

</html>