<?php

/* The pi() function returns the value of PI */

$e= pi();
echo " The value of pi is: $e <br>";

/* The min() and max() functions can be used to find the lowest or highest value in a list of arguments */
echo("The min value is:".min(10,20,30,40,50)."<br>");
echo("The max value is:".max(10,20,30,40,50). "<br>");

/* The abs() function returns the absolute (positive) value of a number */
echo("The absoulate value is:".abs(-10)."<br>");

/* The sqrt() function returns the square root of a number */
echo(sqrt(63)."<br>");

/* The round() function rounds a floating-point number to its nearest integer */

echo(round(31.554)."<br>");

/* The rand() function generates a random number */
echo(rand(1,2000));
?>