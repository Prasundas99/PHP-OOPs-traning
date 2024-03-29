<?php 

/*Since we are not getting email asadmin as our email is private we are declaring it as protected
Protected is similar to private
cannot be used outside of class but can be called

*/
  class User {

    public $username;
    protected $email;  //Change made
    public $role = 'member';

    public function __construct($username, $email){
      //$this->username = 'ken';
      $this->username = $username;
      $this->email = $email;
    }

    public function addFriend(){
      //return "added a new friend";
      return "$this->username just added a new friend";
    }

    public function message(){
      return "$this->email sent a new message";
    }

    // getters
    public function getEmail(){
      return $this->email;
    }

    // setters
    public function setEmail($username){
      if(strpos($username, '@') > -1){
        $this->email = $username;
      };
    }

  }

  class AdminUser extends User {

    public $level;
    public $role = 'admin';

    public function __construct($username, $email, $level){
      parent::__construct($username, $email);
      $this->level = $level; 
    }

    public function message(){
      return "admin $this->email sent a new message";
    }

  }

  $userOne = new User('prasun', 'prasun@google.com');
  $userTwo = new User('das', 'das@google.com');
  $userThree = new AdminUser('admin', 'admin@google.com', 5);

  echo $userOne->message() . '<br>';
  echo $userThree->message() . '<br>'; 

  //echo $userOne->email . '<br>';

?>

<html lang="en">
<head>
  <title>PHP OOP</title>
</head>
<body>
  
</body>
</html>