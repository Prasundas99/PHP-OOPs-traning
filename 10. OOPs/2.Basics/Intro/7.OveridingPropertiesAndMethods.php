<?php
/*

changing default role
i.e member or admin

*/

class User
{

    public $username;
    private $email;
    public $role = 'member';  //overriding this

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

    public function message()
    {
        return "$this->email sent a new message";
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
    public $role = 'admin';

    public function __construct($username, $email, $level)
    {
        parent::__construct($username, $email);
        $this->level = $level;
    }

    public function message()  //overiding
    {
        return "an admin sent a new message";
    }
}
$userOne = new User('prasun', 'prasun@google.com');
  $userTwo = new User('das', 'das@google.com');
  $userThree = new AdminUser('admin', 'admin@google.com', 5);

echo $userOne->role . '<br>';
echo $userThree->role . '<br>';

echo $userOne->message() . '<br>';
echo $userThree->message() . '<br>';

?>

<html lang="en">

<head>
    <title>PHP OOP</title>
</head>

<body>

</body>

</html>