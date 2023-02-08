<?php

/* The switch statement is used to perform different actions based on different conditions.
This is how it works: First we have a single expression n (most often a variable), that is evaluated once. The value of the expression is then compared with the values for each case in the structure. If there is a match, the block of code associated with that case is executed. Use break to prevent the code from running into the next case automatically. The default statement is used if no match is found. */
$color="Pink";
switch($color){
    case "red":
    echo "Color is red";
    break;
    case "Green":
    echo "Color is Green";
    break;
    case "White":
    echo "Color is white";
    break;
    case "Pink":
    echo "Color is Pink";
    break;
   default:
   echo " Color not found";





}

?>