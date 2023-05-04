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

//rand() - returns a random number:
echo "Random number 1 generated: ". rand() ."\n"; # Prints out a completely random integer (limited by 0 and maximum value accepted by php)
echo "Random number 2 generated: ". rand(50, 500). "\n"; # Prints out a random integer between 50 and 500 (inclusive)

//abs() - returns the absolute value of a number:
$num3 = -8987;
echo "Absolute value of ".$num3." is: ". abs($num3);