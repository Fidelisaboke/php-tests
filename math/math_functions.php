<?php
//Exploring the math functions of php (some):

//max() - returns a maximum value from a list of values:
echo "Max: ".max(12, 7500, -838, 46, 4)."\n"; # Prints 7500

//min() - opposite of max:
echo "Min: ".min(12, 7500, -838, 46, 4)."\n"; # Prints -838

//round() - rounds off a float to its nearest integer value():
$num1 = 145.7;
$num2 = 53.32;
echo "Rounding off ".$num1.": ". round(145.67)."\n"; # Prints 146
echo "Rounding off ".$num2.": ". round(53.32)."\n"; # Prints #53