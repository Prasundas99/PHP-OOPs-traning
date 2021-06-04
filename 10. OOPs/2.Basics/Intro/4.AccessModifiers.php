<?php 

/*Properties and methods can have access modifiers which control where they can be accessed.

There are three access modifiers:

public - the property or method can be accessed from everywhere. This is default
protected - the property or method can be accessed within the class and by classes derived from that class
private - the property or method can ONLY be accessed within the class



<?php
class Fruit {
  public $name;
  protected $color;
  private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR
?>



*/


  class User {

    public $username;
    private $email;

    public function __construct($username, $email){
      //$this->username = 'ken';
      $this->username = $username;
      $this->email = $email;
    }

    public function addFriend(){
      //return "added a new friend";
      return "$this->username just added a new friend";
    }

  }

  $userOne = new User('mario', 'mario@thenetninja.co.uk');
  $userTwo = new User('luigi', 'luigi@thenetninja.co.uk');

  echo $userOne->email;
  echo $userTwo->email;

?>

<html lang="en">
<head>
  <title>PHP OOP</title>
</head>
<body>