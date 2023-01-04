<?php

$evennumbers = [2, 4, 6, 8];

$oddnumbers = [3, 5, 7, 9];

print_r($evennumbers);

echo "<br>";

echo count($evennumbers);

echo "<br>";

unset($evennumbers[0]);

print_r($evennumbers);

echo "<br>";

echo count($evennumbers);

echo "<br>";

array_push($evennumbers, 10);
print_r($evennumbers);

echo "<br>";

$allmunbers = array_merge($oddnumbers, $evennumbers);
print_r($allmunbers);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";