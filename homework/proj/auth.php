<?php

require_once 'app/Model/User.php';
require_once 'bdAndSession.php';

use App\Model\User;

$newAcc1 = new User();

$email = $_POST['email'];
$user = getUser($email);
if ($user{0} == 1){
} else {
    echo 'No users with this login and password';
    die;
}
$password = $_POST['password'];
echo $pass = $newAcc1->getPasswordHash($password);

if ($pass == $user['password']) {
    echo 'No users with this login and password';
    die;
}
$array = getInf($email);
$_SESSION = $array;

header('Location: index.php');
