<?php
/*Circle calculations
Calculations involving circles
*/
//defining a constant pi and assigning it the pi() value:

define("pi",pi());
/*Circumference of a circle
Circumference = pi*radius**2 -> for radius**2, we can use the pow() function as well
*/
function calculateCircumference($radius){
    return pi*2*$radius;
}
function calculateArea($radius){
    return pi*pow($radius, 2);
}

//Testing:
$rad = 3.5;

$circumference = calculateCircumference($rad);
$area = calculateArea($rad);

echo "Circumference: ".$circumference."\n";
echo "Area: ".$area;
?>