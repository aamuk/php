<?php    

$numbers = [1,2,3,4,5,6,7,8,9,10];

// foreach($numbers as $nums)
// {
//     echo "$nums\n";
// }

for($i = 0; $i < count($numbers); $i=$i+1)
{
    $itt = $numbers[$i];
    echo $itt . "\n";
}