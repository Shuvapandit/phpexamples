<?php 
//Comparison Operators

$x=10;
$y="10";
//Returns true if $x is equal to $y
var_dump($x==$y) ;
echo "<br>";
 // returns true because values are equal
var_dump($x===$y);
echo "<br>";

//not equal
$i=4;
$j=4;
var_dump( $x != $y );
echo "<br>";
//Not equal
// returns false because values are equal
$z= 100;  
$o= 100;
var_dump($z <> $o); 
echo "<br>";

// returns true because types are not equal
$p = 100;  
$l = "100";
var_dump($p !== $l); 
echo "<br>";
//Not identical
// returns true because types are not equal
$k = 100;  
$w = 200;
var_dump($k !== $w); 
echo "<br>";
//	Greater than
$j = 300;  
$c = 200;
var_dump($j > $c); 
echo "<br>";
//	Greater or equal
var_dump($j >= $c); 
echo "<br>";
//	less  than
$h = 300;  
$n = 200;
var_dump($h <$n); 
echo "<br>";
//less than or equal
var_dump($h <=$n); 
echo "<br>";
//Spaceship
/* Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. */
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y






?>