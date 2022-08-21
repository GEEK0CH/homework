<?php
function massiveRedactor($array, $bool = false)
{
    if ($bool == false) {
           echo implode("<p>", $array);
    } else {
        $result = implode(" ", $array);
        return $result;
    }
}

$opel = [
    'model' => 'astra',
    'speed' => '80',
    'doors' => '3',
    'year' => '2016'
];
print_r(massiveRedactor($opel) . "<br>");
$str = massiveRedactor($opel, true);
echo $str;
