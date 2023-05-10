<?php
//Two ways of initializing indexed arrays:
$names = ["John", "Johnson"];
$fruits = array("mango", "banana");
$cars = ["Volvo", "BMW", "Toyota"];

// Initializing associative arrays:
$patients = ['A001'=>"Doe", 'A002'=>"Doeson", 'A003'=>"Jane", 'A004'=>"Janeson"];

//Print the contents of the array with their indexes:
print_r($names);
print_r($fruits);
print_r($cars);
print_r($patients);

//Print a single element of an array:
echo $names[1]."\n";
echo $fruits[0]."\n";
echo $cars[2]."\n";

//Associative arrays:
echo $patients['A003']."\n";

//Check the data type of the sarray:
var_dump($names);
var_dump($fruits);
var_dump($cars);
var_dump($patients);
?>