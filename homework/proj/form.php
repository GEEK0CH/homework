<?php
require_once 'bdAndSession.php';
session_destroy()
?>

<h1>Form registration and authorization</h1><br><br><br>

<h2>Form registration</h2>
<form action="reg.php" method="post">
    Name: <input type="text" name="name" value=""><br>
    Email:<input type="text" name="email" value=""><br>
    Password:<input type="text" name="password" value=""><br>
    Confirm password:<input type="text" name="confirmPassword" value=""><br>
    <button name="submit" value="Registration">Зарегистрироваться</button>
</form>
<br><br>

<h2>Form authorization</h2>
<form action="auth.php" method="post"><br>
    Email:<input type="text" name="email" value=""><br>
    Password:<input type="text" name="password" value=""><br>
    <button name="submit" value="Authorization">Войти</button>
</form>

