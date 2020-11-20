<?php
//A Class is a user defined data-type which has data members and member functions
//class Classname(starts with capital)
class Cars {
//Class defination

    //method are function declared in  class
    function greeting(){
    //function is blueprint of an object

    }

        function greeting2(){
    //function is blueprint of an object

    }

}


//php keeps track of methods

$the_methods = get_class_methods('Cars');//have to give parameters
foreach ($the_methods as $method) {
    echo $method ." <br>";
}




//php keeps tracks of class
/*$my_classes = get_declared_classes();
foreach ($my_classes as $class) {
    echo $class ." <br>";
}*/

?>


