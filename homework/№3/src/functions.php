<?php

function add($arr)
{
    $name = ['Kolya', 'Alex', 'Masha', 'Sasha', 'Pasha'];

    for ($i = 1; $i < 51; $i++) {
        $arr += [$i =>['id' =>$i , 'name' => $name[rand(0, 4)] ,'age' => rand(18, 45)]];
    }

    return $arr;
}

function countName($array)
{
    $names=array();
    $sum = count($array);
    $sum++;

    for ($i = 1; $i < $sum; $i++) {
        $myKey = [$i];

        $newArray = array_filter($array, function ($key) use ($myKey) {
            return in_array($key, $myKey);
        }, ARRAY_FILTER_USE_KEY);

        foreach ($newArray as $value) {
            $n = $value['name'];

            if (empty($name1) == true) {
                $name1 = $n;
                $n1++;
                break;
            } elseif ($name1 == $n) {
                $n1++;
                break;
            } elseif (empty($name2) == true) {
                $name2 = $n;
                $n2++;
                break;
            } elseif ($name2 == $n) {
                $n2++;
                break;
            } elseif (empty($name3) == true) {
                $name3 = $n;
                $n3++;
                break;
            } elseif ($name3 == $n) {
                $n3++;
                break;
            } elseif (empty($name4) == true) {
                $name4 = $n;
                $n4++;
                break;
            } elseif ($name4 == $n) {
                $n4++;
                break;
            } elseif (empty($name5) == true) {
                $name5 = $n;
                $n5++;
                break;
            } elseif ($name5 == $n) {
                $n5++;
                break;
            }
        }
    }
    echo "{$name1}: {$n1} <br>";
    echo "{$name2}: {$n2} <br>";
    echo "{$name3}: {$n3} <br>";
    echo "{$name4}: {$n4} <br>";
    echo "{$name5}: {$n5} <br>";

}

function countAge($array)
{
    $countAge = 0;

    foreach ($array as $user) {
        $countAge += $user['age'];
    }

    $sum = count($array);
    $countAge /= $sum;

    echo "Средний возраст пользователей: {$countAge} <br>";
}
