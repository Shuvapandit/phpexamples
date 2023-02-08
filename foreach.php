<?php 
/* The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element. */

$colors=array("Red","Green","Black","white");
foreach($colors as $value){
    echo "The colors is:-" .$value ."<br>";

}


$age=array("Rahim"=>"30","Karim"=>"50","Shakib"=>"60");
foreach($age as $value =>$val){
    echo "Age is:-" .$val ."<br>";
}


?>