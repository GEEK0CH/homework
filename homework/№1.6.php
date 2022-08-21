<?php
echo '<table>';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    echo '<td>';
    echo "[$i]";
    echo '</td>';

    for ($b = 2; $b <= 10; $b++) {
        echo '<td>';
        if ($i == 1) {
            echo "[" . $i*$b . "]";
        } elseif ($b % 2 == 0) {
            echo "(" . $i*$b . ")";
        } else {
            echo "[" . $i*$b . "]";
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
