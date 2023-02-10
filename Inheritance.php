<?php 
/* Inheritance in OOP = When a class derives from another class.

The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

An inherited class is defined by using the extends keyword. */
class A{
    public $name;
    public $age;
  function __construct($name,$age)
  {
     echo  $this->name =$name;
      echo $this->age =$age;
  }

}
class B extends A{
  function y(){
    echo " inherite from class A and Hello from Class B";
  }


}

$obj1=new B("shuva ",36 );
$obj1->y();







?>