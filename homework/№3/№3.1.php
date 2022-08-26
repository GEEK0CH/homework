<?php

function add($arr = array())
{
    $name = array("Kolya", "Alex", "Masha", "Sasha", "Pasha");

    for ($i = 1; $i < 51; $i++) {
        $arr +=["$i" =>["id" =>"$i" , 'name' => $name[rand(0, 4)] ,'age' => rand(18, 45)]];
    }
    return $arr;
}

//add();

//$json = json_encode(add());
//file_put_contents('users.json', $json);

$data =  json_decode(file_get_contents('users.json'), true);

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
            $n = $value["name"];
            switch ($n) {
                case 'Kolya':
                    $Kolya += 1;
                    break;
                case 'Alex':
                    $Alex += 1;
                    break;
                case 'Masha':
                    $Masha += 1;
                    break;
                case 'Sasha':
                    $Sasha += 1;
                    break;
                case 'Pasha':
                    $Pasha += 1;
                    break;
            }
        }
    }
    echo 'Kolya: ' . $Kolya . '<br>';
    echo 'Alex:  ' . $Alex . '<br>';
    echo 'Masha: ' . $Masha . '<br>';
    echo 'Sasha: ' . $Sasha . '<br>';
    echo 'Pasha: ' . $Pasha . '<br>';
}

countName($data);

function countAge($array)
{
    $ages=array();
    $sum = count($array);
    $sum++;

    for ($i = 1; $i < $sum; $i++) {
        $myKey = [$i];
        $newArray = array_filter($array, function ($key) use ($myKey) {
            return in_array($key, $myKey);
        }, ARRAY_FILTER_USE_KEY);
        foreach ($newArray as $value) {
            $a += $value["age"];
        }
    }

    $sum = count($array);
    $a /= $sum;
    echo 'Средний возраст пользователей: ' . $a . '<br>';
}

countAge($data);
