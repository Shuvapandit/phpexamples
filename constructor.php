<?php
/* PHP - The __construct Function
A constructor allows you to initialize an object's properties upon creation of the object.

If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

Notice that the construct function starts with two underscores (__)!
 */
class Fruit
{

    public $name;
    public $color;
    public $size;
    function __construct($name, $color, $size)
    {
        //if u upadate value u can code this way
        /*  $this->name=$name; 
 $this->color=$color; 
$this->size=$size;  */
        echo $this->name = $name;
        echo $this->color = $color;
        echo $this->size = $size;
    }
}
$obj1 = new Fruit("Mango", " is Red,", "packed 1kg");
//updated value
/* $obj1->name="JackFruit"; 
echo $obj1->name;  */
echo "<br>";
$obj2 = new Fruit("Apple", " is Green,", "packed 2kg");
