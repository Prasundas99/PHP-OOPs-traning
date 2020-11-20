<?php
//class Classname(starts with capital)
class Cars {
//Class defination


}

$my_classes = get_declared_classes();

foreach ($my_classes as $class) {
    echo $class ." <br>";
}

?>