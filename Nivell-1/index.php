<?php
require_once("classes.php");

//Testing Exercici 1
$employeeOne = new Employee;
$employeeOne -> initialize("Gabriela",6000);
echo $employeeOne->print();
echo "</br>";

$employeeTwo = new Employee;
$employeeTwo -> initialize("Julio", 6500);
echo $employeeTwo->print();
echo "</br>";

$employeeThree = new Employee;
$employeeThree -> initialize("Thiago", 500);
echo $employeeThree->print();
echo "</br>";

//Testing Exercici 2
$triangleOne = new Triangle(10, 20);
echo "El área del Triángulo 1 es:  ";
$triangleOne->area();
echo "</br>";

$rectangleOne = new Rectangle(20, 10);
echo "El área del Rectángulo 1 es:  ";
$rectangleOne->area();
echo "</br>";

$triangleTwo = new Triangle(4, 10);
echo "El área del Triángulo 2 es:  ";
$triangleTwo->area();
echo "</br>";

$rectangleTwo = new Rectangle(50, 10);
echo "El área del Rectángulo 2 es:  ";
$rectangleTwo->area();
echo "</br>";
?>