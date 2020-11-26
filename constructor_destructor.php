<?php
//For static modifier we donot need any instance we can directly call it from class
class Cars{
    public $wheel_count = 4;
    

    //this will initialise something
     function __construct(){
         
        echo $this->wheel_count . "is the car";

        
    }

    //this is how a descructor is called
    function __destruct()
    {
        $this->wheel_count--;
    }
}

$bmw = new Cars();

//Construct we do not need to call
?>




