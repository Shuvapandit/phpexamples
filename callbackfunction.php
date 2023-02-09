<?php
/* Callback Functions
A callback function (often referred to as just "callback") is a function which is passed as an argument into another function.
Any existing function can be used as a callback function. To use a function as a callback function, pass a string containing the name of the function as the argument of another function*/
function calback_fun($x){
    return strlen($x);
}
$fruits =['apple','orange','mango'];
$length=array_map("calback_fun",$fruits);
/* The print_r() function prints the information about a variable in a more human-readable way.
print_r(variable, return); */
print_r($length) ;
/* Use an anonymous function as a callback for PHP's array_map() function */

$name=['x','y','z'];
$lngth= array_map(function($item){
    return strlen($item);
},$name);
print_r($lngth) ;

?>