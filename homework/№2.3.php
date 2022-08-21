<?php

echo '<table>';
function multiplicationTable($a,$c)
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

multiplicationTable("vs",6);