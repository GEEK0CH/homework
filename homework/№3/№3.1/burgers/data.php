<?php
$mysql = @new mysqli('localhost', 'root', '', 'burgers');

$name =$_POST['name'];
$email = $_POST['email'];
$street =$_POST['street'];
$home = $_POST['home'];
$kvar = $_POST['appt'];
$floor =$_POST['floor'];
$zakaz = 1;

echo '<pre>';
$sql = mysqli_query($mysql,"SELECT * FROM users WHERE  email LIKE '$email';");
$d = $sql->num_rows;


if ($d == 0) {
    $mysql->query("INSERT INTO `users`(`name`,`email`,`street`,`home`,`kvar`,`floor`,`zakaz`) VALUES('$name','$email','$street','$home','$kvar','$floor','$zakaz')");
} else {
    $k = $mysql->query("SELECT `zakaz` FROM `burgers`.`users` WHERE `email` = '$email';");
    $data = $k->fetch_row();
    $zakaz = $data[0] + 1;
    $mysql->query("UPDATE `users` SET `zakaz` = '$zakaz' WHERE `users`.`email` = '$email';");
}

$k = $mysql->query("SELECT `zakaz` FROM `burgers`.`users`;");
$data = $k->fetch_all();


foreach ($data as $value) {
    $sum += $value[0];
}


echo "Спасибо, ваш заказ будет доставлен по адресу: “{$_POST['street']} {$_POST['home']} {$_POST['appt']} Этаж {$_POST['floor']} <br>";
echo "Номер вашего заказа: #{$sum} <br>";
echo "Это ваш $zakaz-й заказ!";
