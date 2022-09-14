<?php
require_once 'Base/Db.php';
require_once 'app/Model/User.php';
require_once 'bdAndSession.php';

use Base\Db;
use App\Model\User;

$newAcc = new User();

$emailCheck = $_POST['email'];

$name = $_POST['name'];
if ($name === 0) {
    echo 'You didnt enter name';
    die;
}
$user = Db::getUser($emailCheck);
if ($emailCheck === 0){
    echo 'You didnt enter email';
    die;
} elseif ($user[0] == 1) {
    echo 'This email already take';
    die;
} else {
    $email = $emailCheck;
}
$date = date('Y-m-d');
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if ($password === 0) {
    echo 'You didnt enter password';
    die;
} elseif ($confirmPassword === 0) {
    echo 'You didnt enter confirm password';
    die;
}

$comparePassword = $newAcc->comparePassword($password, $confirmPassword);
$checkedLengthPassword = $newAcc->lengthPassword($comparePassword);
$passwordHash = $newAcc->getPasswordHash($checkedLengthPassword);
$password = $passwordHash;
$id = $newAcc->checkLastInsertId();
var_dump($id);

$newAcc->save($name , $date, $password, $email);

header('Location: app/View/form.php');
