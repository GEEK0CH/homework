<?php

require('src/functions.php');

add();

$json = json_encode(add());
file_put_contents('users.json', $json);

$data =  json_decode(file_get_contents('users.json'), true);

countName($data);

countAge($data);
