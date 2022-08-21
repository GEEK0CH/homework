<?php

$text = "Hello again!";
fopen('data.txt', 'x');
$fp =  fopen('data.txt', 'w');

echo fputs($fp, $text);
$name = 'data.txt';

function openFileAndOutput($name)
{
    var_dump(file_get_contents($name));
}

openFileAndOutput($name);
