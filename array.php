
<?php
 $fruits = array('apple','Orange','Mango');
echo ($fruits[2]  . "<br>");

//Multidimensional Arrays
$phones=
array(
array('Mi',2,10),
array('vivo',3,5),
array('walton',7,90)
);
echo $phones[1][0] ."<br>";
echo $phones[2][0] ."<br>";

//sort() - sort arrays in ascending order
$cars =array("toyota","CBZ","Walton");
sort($cars);
$carlength= count($cars);
for($x=0;$x<$carlength;$x++){
    echo $cars[$x];
    echo "<br> <br>";

}
//Sort Array in Descending Order - rsort()
//The following example sorts the elements of the $lights array in descending alphabetical order
$lights=array('walton','transcend','acer');
rsort($lights);
$lightlength= count($lights);
for($y=0;$y<$lightlength;$y++){
    echo $lights[$y];
    echo "<br>";
}

/* Sort Array (Ascending Order), According to Value - asort()
The following example sorts an associative array in ascending order, according to the value: */
$age=array("rahim"=>"10","krim"=>"30","nabin"=>"7");
asort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }


?>