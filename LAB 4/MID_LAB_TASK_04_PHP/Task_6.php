<?php

function findValue($arry,$search){
    foreach($arry as $i => $value)
    {
        $found = false;

        if($arry[$i] == $search)
        {
            $found == true;
            break;
        } 
    }
    if($found)
        echo"<b>$search</b> found";
    else
        echo"<b>$search</b> not found";
}
    $arry = [10,20,30,40,50];
    findValue($arry,20);
    echo "<br>";
    findValue($arry,21);
?>