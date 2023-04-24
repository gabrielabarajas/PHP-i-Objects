<?php

//Ejercicio 1
class Employee{
private $name;
private $salary;

private function __construct($name,$salary){
    $this->name= $name;
    $this->salary= $salary;
}

public function print(){

    if ($this->salary > 6000){
        echo $this->name." - Ha de pagar impuestos -";
    }else{
        echo $this->name." - No ha de pagar impuestos -";
    };
}
}

//Testing Ejercicio 1

$employeeOne = new Employee("Gabriela", 6500);
$employeeTwo = new Employee("Julio", 6000);
$employeeThree = new Employee("Thiago", 500);

?>