<?php

//Exercici 1
class Employee{
private $name;
private $salary;

public function __construct($name,$salary){
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

//Testing Exercici 1

$employeeOne = new Employee("Gabriela", 6500);
echo $employeeOne->print();
echo "</br>";

$employeeTwo = new Employee("Julio", 6000);
echo $employeeTwo->print();
echo "</br>";

$employeeThree = new Employee("Thiago", 500);
echo $employeeThree->print();
echo "</br>";

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
    private $area;

    public function area(){
        echo $this->area = ($this->width * $this->height)/2;
    }
}

class Rectangle extends Shape{
    private $area;

    public function area(){
        echo $this->area = ($this->width * $this->height);
    }
}

//Testing Exercici 2

$triangleOne = new Triangle(10, 20);
echo "El área del Triángulo 1 es:  ";
$triangleOne->area();
echo "</br>";

$rectangleOne = new Rectangle(20, 10);
echo "El área del Rectángulo 1 es:  ";
$rectangleOne->area();
echo "</br>";

?>