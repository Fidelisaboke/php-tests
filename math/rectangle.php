<?php
/*Rectangle calculations
This php script does various calculations involving rectangles*/

/*Perimeter function
Rectangle Perimeter = 2(Length + Width)*/
function calculatePerimeter($length, $width){
        return 2*($length+$width);
}

/*Area function
Rectangle area = length * width
*/
function calculateArea($length, $width){
    return $length*$width;
}

//Testing:
$perimeter = calculatePerimeter(15, 25);
$area = calculateArea(20,30);

echo "Perimeter of the rectangle: ".$perimeter."\n";
echo "Area of the rectangle: ".$area;
?>