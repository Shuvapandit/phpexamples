<?php 
function name(){
    echo "My name is shuva" ."<br>";
}
name();

/* PHP Function Arguments
Information can be passed to functions through arguments. An argument is just like a variable. */
function xyz($name){
    echo "$name is my name. <br>";

}
xyz("shuva");
xyz("Rahim");
xyz("kabir");
xyz("shakit");


//ex3
function man($name,$year){
    echo "$name is my name and i am $year years old. <br>";
}
man("Shuva",1998);
man("Sagor",1997);
man("Joy",1990);
man("Sudip",1800);
?>