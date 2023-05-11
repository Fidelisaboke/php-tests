<?php

//Declaring a multidimensional array
$data = [
    'Game of Thrones' => ['Jaime Lannister', 'Catelyn Stark', 'Cersei Lannister'],
    'Black Mirror' => ['Nanette Cole', 'Selma Telse', 'Karin Parke']
];

//Traversing and printing the contents of the multidimensional array
echo '<h1>Famous TV Series and Actors</h1>';
foreach($data as $series => $actors){
    echo "<h2>$series</h2>";
    foreach($actors as $actor){
        echo "<div>$actor</div>";
    }
}


?>