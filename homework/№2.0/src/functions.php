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

function calcEverything($args)
{
    $result = 0;
    $arg = $args[0];

    if ($arg == '+') {
        $result = $args[1];
        for ($i = 2; $i < sizeof($args); $i++) {
            $result += $args[$i];
        }
    } elseif ($arg == '-') {
        $result = $args[1];
        for ($i = 2; $i < sizeof($args); $i++) {
            $result -= $args[$i];
        }
    } elseif ($arg == '*') {
        $result = $args[1];
        for ($i = 2; $i < sizeof($args); $i++) {
            $result *= $args[$i];
        }
    } elseif ($arg == '/') {
        $result = $args[1];
        for ($i = 2; $i < sizeof($args); $i++) {
            $result /= $args[$i];
        }
    }
    return $result;
}

echo '<table>';

function multiplicationTable($a, $c)
{
    if (is_int($a) == false || is_int($c) == false) {
        echo 'Нужно ввести 2 цифры а не символы';
    } else {
        for ($i=1; $i<=$a; $i++) {
            echo '<tr>';
            echo '<td>';
            echo $i;
            echo '</td>';

            for ($b=2; $b<=$c; $b++) {
                echo '<td>';
                if ($i == 1) {
                    echo  $i*$b;
                } elseif ($b % 2 == 0) {
                    echo $i*$b;
                } else {
                    echo $i*$b;
                }
                echo '</td>';
            }
            echo '</tr>';
        }
    }
}
echo '</table>';

function dateViewer()
{
    echo date('d.m.Y H:i') . '<br>';
    echo strtotime('24.02.2016 00:00:00');
}

function delKAndFlip($str, $str2)
{
    echo str_replace('К', '', $str);
    echo '<br>';
    echo str_replace('Две', 'Три', $str2);
    echo '<br>';
}

function openFileAndOutput($name)
{
    $text = "Hello again!";
    fopen('data.txt', 'x');
    $fp =  fopen('data.txt', 'w');

    echo fputs($fp, $text);
    var_dump(file_get_contents($name));
}
