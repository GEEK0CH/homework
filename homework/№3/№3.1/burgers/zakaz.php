<?php

require('data.php');

echo 'Спасибо, ваш заказ будет доставлен по адресу: “' . $_POST['street'] . $_POST['home']
    . $_POST['appt'] . $_POST['floor'] . '”';
echo 'Номер вашего заказа: #ID';
echo 'Это ваш n-й заказ!';
