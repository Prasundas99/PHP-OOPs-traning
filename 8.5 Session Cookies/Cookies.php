<?php

//sessions
if(isset($_POST['submit'])){

    //Cookie for email
    setcookie('mail', $_POST['mail'], time()+ 86400);
    //contains 2 value 1st for cookie name  2nd for what cookie will store  3rd  Cookie expiery time



    session_start(); //This starts the session

    $_SESSION['name'] = $_POST('name');

    //echo $_SESSION['name'];
    header('Location: index.php');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="POST">
    <!--Or we can do This  ----- the upper line means redirecting to same page
    <form action="sessions.php" method="post">  
--> 
    <input type="text" name="name" id="">
    <input type="email" name="mail" id="">
    <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>