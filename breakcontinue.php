<?php
/* The break statement can also be used to jump out of a loop. */
for($i=0;$i<=100;$i++){
    if($i==7){
        break;
    };
    echo "The number is:-" .$i ."<br>" ."<br>";


}
/* The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop. */
for($i=0;$i<=100;$i++){
    if($i==7){
        continue;
    };
    echo "The number is:-" .$i ."<br>";


}



?>