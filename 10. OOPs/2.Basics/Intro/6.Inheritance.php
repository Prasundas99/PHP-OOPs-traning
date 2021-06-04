<?php
/*
Inheritance: 
One class Inheriting the Propertiies and methods of another.
Like child inheriting the property of their parent i.e eye colour.

The child can have its own unique property and their parent's property too

Goal to reduce code dublication

Inheritance in OOP = When a class derives from another class.

The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.


Example:
<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>

Example Explained:
The Strawberry class is inherited from the Fruit class.

This means that the Strawberry class can use the public $name and $color properties as well as the public __construct() and intro() methods from the Fruit class because of inheritance.

The Strawberry class also has its own method: message().

*/




//Here we have a user and an admin access to
// A admin has all access of user + some additional benifits
class User
{

    public $username;
    private $email;

    public function __construct($username, $email)
    {
        //$this->username = 'ken';
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend()
    {
        //return "added a new friend";
        return "$this->username just added a new friend";
    }

    // getters
    public function getEmail()
    {
        return $this->email;
    }

    // setters
    public function setEmail($username)
    {
        if (strpos($username, '@') > -1) {
            $this->email = $username;
        };
    }
}

class AdminUser extends User
{

    public $level;

    public function __construct($username, $email, $level)
    {
        parent::__construct($username, $email);
        $this->level = $level;
    }
}

$userOne = new User('mario', 'mario@thenetninja.co.uk');
$userTwo = new User('luigi', 'luigi@thenetninja.co.uk');
$userThree = new AdminUser('yoshi', 'yoshi@thenetninja.co.uk', 5);

echo $userThree->level . '<br>';
echo $userThree->username . '<br>';
echo $userThree->getEmail() . '<br>';

?>

<html lang="en">

<head>
    <title>PHP OOP</title>
</head>

<body>

</body>

</html>