<?php 

session_start();

//deleting sesssion
if($_SERVER['QUERY_STRING'] == 'noname'){
    session_unset();
}

//$name = $_SESSION['name'];

//Null Coalescing
$name = $_SESSION['name']?? 'Guest';

?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keeper</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css\header.css">
    <link rel="stylesheet" href="css\footer.css">
    
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body class="grey lighten-4">
    <nav class="white ">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text"> Keeper </a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li  class="grey-text">Hello,   <?php  echo htmlspecialchars($name) ;?> </li>
                <li><a href="add.php" class="btn brand z-depth-0"> Add a Note </a></li>
            </ul>
        </div>
    </nav>