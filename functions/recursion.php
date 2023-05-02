<?php
//This php script contains recursive functions:

/* Finobacci sequence:
Every number in this sequence is the sum of the last 2 preceeding numbers.
Base cases:
if $x is 0, return 0;
if $x is 1, return 1
*/
function finobacci($x){
    if ($x==0){
        return 0;
    } else if($x==1){
        return 1;
    } else{
        return finobacci($x-1) + finobacci($x-2);
    }
}

/*Factorial notation:
The factorial of a number, denoted as n!, is the product of all natural numbers from 1 to n. n is a whole number {0,1,2,...}
Base cases:
if $x is 1 or 0, return 1.
*/
function factorial($x){
    if($x==0){
        return 1;
    } else if($x==1){
        return 1;
    } else{
        return factorial($x-1)*$x;
    }
}

/*Power of a number:
It's define as b^p, where b is the base(number to be multiplied by itself) and p is the power(how many times 'b' should be multiplied by itself)
Note that:
b^0 = 1.
0^p = 0.
0^0 = undefined.
*/
function power($base, $exponent){
    if($exponent==0 and $base!=0){
        return 1;
    }else if ($exponent!=0 and $base==0){
        return 0;
    } else if($exponent==0 and $base==0){
        echo "undefined";
    } else{
        return power($base, $exponent-1)*$base;
    }
}


//Recursive function testing:
echo finobacci(4)."\n";
echo factorial(7)."\n";
echo power(8, 3);

?>