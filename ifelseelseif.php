<?php

/* if statement - executes some code if one condition is true*/
$number=10;
if($number<=100){
    echo "$number is less than 100 <br>";
}
/* if...else statement - executes some code if a condition is true and another code if that condition is false */

$number=301;
if($number<=200){
    echo "$number is less than 200 <br>";
}
else{
    echo " $number is more than 100 <br>";
};
/* if...elseif...else statement - executes different codes for more than two conditions */

$i=6;
if($i==9){
    echo "$i is equal 13 <br>";

}
elseif ($i<=10){
    echo "$i is less than or equal 10 <br>";
}
else {
    echo "$i is more than 10<br>";
};

?>