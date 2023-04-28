<?php
function factorial($x){
    if ($x==0 or $x==1){
        return 1;
    } else{
        return factorial($x-1)*$x;
    }
}

echo factorial(3)."\n";
echo factorial(0)."\n";
echo factorial(1)."\n";
echo factorial(12);
?>