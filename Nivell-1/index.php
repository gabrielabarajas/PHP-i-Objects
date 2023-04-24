<?php

//Ejercicio 1
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

//Testing Ejercicio 1

$employeeOne = new Employee("Gabriela", 6500);
echo $employeeOne->print();
echo "</br>";

$employeeTwo = new Employee("Julio", 6000);
echo $employeeTwo->print();
echo "</br>";

$employeeThree = new Employee("Thiago", 500);
echo $employeeThree->print();


?>