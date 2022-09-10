<?php
require_once 'app/Model/User.php';
require_once 'bdAndSession.php';

use App\Model\User;


$newAcc = new User();

$emailCheck = $_POST['email'];
$name = $_POST['name'];
$user = getUser($emailCheck);
if ($user{0} == 1){
    echo 'This email already take';
    die;
} else {
    $email = $emailCheck;
}
$date = date('Y-m-d');


$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$comparePassword = $newAcc->comparePassword($password, $confirmPassword);
$checkedLengthPassword = $newAcc->lengthPassword($comparePassword);
$passwordHash = $newAcc->getPasswordHash($checkedLengthPassword);
$password = $passwordHash;
$id = $newAcc->checkLastInsertId();
var_dump($id);

$newAcc->save($name , $date, $password, $email);

header('Location: form.php');
