<?php
function piramidStar(){
    for ($i=1; $i<=3; $i++)	
    {	 
        for($j=1;$j<=$i;$j++)	  
        {	  	
            echo "*"." ";	 
        }	  	
        echo "<br/>";   	
    }
}

function abcPiramid(){
    $n = 3;
    $num = 65;
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j <= $i; $j++ )
        {
            $ch = chr($num);
            echo $ch." ";
            $num = $num + 1;
        }
        echo "<br>";
    }
}

function revPiramid(){ 
    for ($i = 3; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; ++$j) {
           echo $j." ";
        }
        echo "<br>";
     }
}

echo "<table border=1>
    <tr>
        <td>";
            piramidStar();
        echo "</td>
        <td>";
            abcPiramid();
        echo "</td>
        <td>";
            revPiramid();
        echo "</td>
    <tr>
</table>
";
?>

