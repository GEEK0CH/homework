<?php

require('src/functions.php');

$opel = [
    'model' => 'astra',
    'speed' => '80',
    'doors' => '3',
    'year' => '2016'
];
print_r(massiveRedactor($opel) . "<br>");
$str = massiveRedactor($opel, true);
echo $str;

echo "<br><br>";

echo calcEverything(['+',2,2,3]);

echo "<br><br>";

multiplicationTable("6", 6);

echo "<br><br>";

dateViewer();

echo "<br><br>";

$str = "Карл у Клары украл Кораллы";
$str2 = "Две бутылки лимонада";

delKAndFlip($str, $str2);

echo "<br><br>";

$name = 'data.txt';

openFileAndOutput($name);
