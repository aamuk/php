<?php  

function square($nums)
{

    $sum = 0;

    foreach($nums as $numbers)
    {
        $sum += $numbers * $numbers;
    }

    return $sum;
}


echo square([2,2]);