<?php
//Exercici 1
class Employee{
private $name;
private $salary;

public function initialize($name,$salary){
    $this->name= $name;
    $this->salary= $salary;
}

public function print(){
    if ($this->salary > 6000){
        echo $this->name." - Ha de pagar impuestos.";
    }else{
        echo $this->name." - No ha de pagar impuestos.";
    };
}
}

//Exercici 2
class Shape{
    public $width;
    public $height;

    public function __construct($width,$height){
        $this->width= $width;
        $this->height= $height;
    }
}

class Triangle extends Shape{
    public function area(){
        echo ($this->width * $this->height)/2;
    }
}

class Rectangle extends Shape{
    public function area(){
        echo ($this->width * $this->height);
    }
}


?>