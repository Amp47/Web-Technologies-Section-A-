<?php
    $array = [
        [1,2,3,'A'],
        [1,2,'B','C'],
        [1,'D','E','F']
    ];
    echo "<table border=1>";
    echo "<tr>";
    echo "<td>";
    foreach ($array as $i => $arr){
        foreach ($arr as $i){
            if(is_int($i)){
                echo $i." ";
            }
        }
        echo "<br>";
     }
     echo "</td>";
     echo "<td>";
     foreach ($array as $i => $arr){
        foreach ($arr as $i){
            if(!is_int($i)){
                echo $i." ";
            }
        }
        echo "<br>";
     }
     echo "</td>";
     echo "</tr>";
?>
