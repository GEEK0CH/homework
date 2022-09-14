<?php

require_once 'Base/Db.php';
require_once 'app/Model/User.php';
require_once 'bdAndSession.php';

use Base\Db;
use App\Model\User;

$newAcc1 = new User();
$email = $_POST['email'];
var_dump($email);
if ($email === 0) {
    echo 'You didnt enter email';
    die;
}
$user = Db::getUser($email);
if ($user[0] == 1){
} else {
    echo 'No users with this login and password';
    die;
}
$password = $_POST['password'];
$pass = $newAcc1->getPasswordHash($password);

if ($pass == $user['password']) {
    echo 'No users with this login and password';
    die;
}
$array = Db::getInf($email);
$_SESSION = $array;

header('Location: index.php');
