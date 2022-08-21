<?php

$bmw = [
        'model' => 'X5',
        'speed' => '120',
        'doors' => '5',
        'year' => '2015'
];
$toyota = [
        'model' => 'camry',
        'speed' => '150',
        'doors' => '5',
        'year' => '2020'
];
$opel = [
        'model' => 'astra',
        'speed' => '80',
        'doors' => '3',
        'year' => '2016'
];

$cars = [
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel
];

foreach ($cars as $name => $array) {
    echo "Car {$name}<br>";
    echo implode(' ', $array)."<br>";
}
