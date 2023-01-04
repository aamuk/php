<?php  

$numbers = [1,2,3,4,5,6,7,8,9];

$counter = 0;

while($counter < count($numbers))
{
    $counter += 1;

    if($counter % 2 == 0)
    {
        echo "$counter is even <br>";
        continue;
    }

    echo "$counter is odd <br>";
}