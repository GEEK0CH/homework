<?php

require_once "bdAndSession.php";

function connectBd()
{
    static $connect;
    if (!$connect) {
        try {
            $connect = new PDO("mysql:host=localhost;port=3306;dbname=project", "root", ""
                ,[\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
        } catch (Exception $a) {
            die('error:' . $a->getMessage());
        }
    }
    return $connect;
}

function isUserAuthorization(): bool
{
    return empty($_SESSION['id']);
}

function getUser($email): array
{
    $sth = connectBd()->prepare("SELECT * FROM `users` WHERE `email` = ?");
    $sth->execute(array("$email"));
    $array = $sth->fetch(PDO::FETCH_ASSOC);
    $id = $array['id'];
    if ($array['email'] == $email) {
        return $array=[1];
    } else {
        return $array=[0];
    }
}

function getMessage(): array
{
    $sth = connectBd()->prepare("SELECT * FROM `message`");
    $sth->execute();
    $array = $sth->fetchAll(PDO::FETCH_ASSOC);

    return $array;
}


function getInf($email): array
{
    $sth = connectBd()->prepare("SELECT * FROM `users` WHERE `email` = ?");
    $sth->execute(array("$email"));
    $array = $sth->fetch(PDO::FETCH_ASSOC);

    return $array;
}

function getName($id): string
{
    $sth = connectBd()->prepare("SELECT * FROM `users` WHERE `id` = ?");
    $sth->execute(array("$id"));
    $array = $sth->fetch(PDO::FETCH_ASSOC);

    return $array['name'];
}
