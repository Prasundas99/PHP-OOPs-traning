<?php

//sessions
if(isset($_POST['submit'])){
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
    <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>