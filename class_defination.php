<?php
//A Class is a user defined data-type which has data members and member functions
//class Classname(starts with capital)
class Cars {
//Class defination

    //Declaring properties or attributes
    var $wheel_count = 4;
    var $door_count = 4;
    //in class we have to write var to say php that i am creating variable

    //method are function declared in  class
    function greeting(){
    //class is blueprint of an object

        echo "Hello!!"."<br>";

        
    }

    function wheeldetails(){
         //pseudo variable
        return "This car has " . $this->wheel_count . "Wheels.";//means class car -> whele count
    }
}

//Class instance
$bmw = new Cars();
$tata = new Cars();

//calling methods from class
$bmw -> greeting();

//calling properties and also printing it


//pseudo print
echo $tata->wheeldetails();






//php keeps track of methods

/*$the_methods = get_class_methods('Cars');//have to give parameters
foreach ($the_methods as $method) {
    echo $method ." <br>";
}*/




//php keeps tracks of class
/*$my_classes = get_declared_classes();
foreach ($my_classes as $class) {
    echo $class ." <br>";
}*/



//inheritance

class Trucks extends Cars{

var $wheeldetails = 10;

}


$tacoma = new Trucks();
echo "<br>";
echo $tacoma->wheeldetails;




//access control modifiers -> special progam in php control flow over modifiers
//public private protected
//public  modifier available to whole program
//private  restricted to only that class
//protected accesible to subclasses

?>


