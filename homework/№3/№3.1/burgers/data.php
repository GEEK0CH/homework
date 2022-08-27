<?php
$filename = 'array.txt';
$data3 = file_get_contents($filename);
$data = unserialize($data3);
echo '<pre>';
var_Dump($data);


function searchForId($email, $array)
{
    foreach ($array as $key => $val) {
        if ($val["email"] == $email) {
            return $key;
        }
    }
    return null;
}

$email = $_POST['email'];
$id = searchForId($email, $data);

var_Dump($id);



echo '<pre>';
$needle= $_POST["email"];

if($id == NULL){
    $keys = array_keys($data);
    $k = end($keys);
    $k++;
    $temp =  [$k => [
        'email' => $_POST['email'],
        'data' => date('d.m.Y H:i'),
        'address' => $_POST['street'],
        'dom'=> $_POST['home'],
        'kvar'=> $_POST['appt'],
        'floor'=> $_POST['floor'],
        'zakaz' => 1 ]];
    $data4 = array_merge($data, $temp);
    $data2 = serialize($data4);
}
else {
    $data[$id]['data'] = date('d.m.Y H:i');
    $n = $data[$id]['zakaz'];
    $n++;
    $data[$id]['zakaz'] = $n;
    $data2 = serialize($data);
}
var_dump($k);
$filename = 'array.txt';


file_put_contents($filename, $data2);

if ($data[$id]['zakaz'] == NULL){
    $zakaz = 1;
} else {
    $zakaz = $n;
}
$dd = unserialize($data2);

for($i=0; $i < count($dd)  ; $i++){
    $n = $data[$i]['zakaz'];
    $sum =$sum + $n;
}

echo 'Спасибо, ваш заказ будет доставлен по адресу: “'  . $_POST['street'] . ' ' .  $_POST['home']
    . ' ' . $_POST['appt'] . ' Этаж ' . $_POST['floor'] . '”' . '<br>';
echo 'Номер вашего заказа: #' . "$sum" . '<br>';
echo "Это ваш $zakaz-й заказ!";
