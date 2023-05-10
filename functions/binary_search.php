<?php
// Implementing the binary search algorithm in php

$numbers = array(1, 24, 45, 67, 103, 642);
$target_one = 24;
$target_two = 103;

function binary_search($array, $target, $high, $low){
    while ($high >= $low){
        $mid = intval(0.5*($high+$low));
        if ($target > $array[$mid]){
            $low = $mid + 1;
        } else if ($target == $array[$mid]){
            return $mid;
        } else{
            $high = $mid -1;
        }
    }
}

function recursive_binary_search($array, $target, $high, $low){
    if ($high < $low){
        return False;
    } else{
        $mid = (intval($high+$low)/2);
        if ($target == $array[$mid]){
            return $mid;
        } else if ($target > $array[$mid]){
            return recursive_binary_search($array, $target, $high, $mid + 1);
        } else{
            return recursive_binary_search($array, $target, $mid -1 , $low);
        }
    }
}

// Testing the functions
$high = sizeof($numbers);

echo $target_one." is in index ".binary_search($numbers, $target_one, $high, 0)."\n"; // Output: 1
echo "(Recursive function) ".$target_two." is in index ".recursive_binary_search($numbers, $target_two, $high, 0); // Output: 4
?>