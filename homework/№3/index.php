<?php

require('src/functions.php');

add(array());

$json = json_encode(add(array()));
file_put_contents('users.json', $json);

$data =  json_decode(file_get_contents('users.json'), true);

countName($data);

countAge($data);
