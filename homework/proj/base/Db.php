<?php

namespace Base;

class Db
{
    public static function connectBd()
    {
        static $connect;
        if (!$connect) {
            try {
                $connect = new \PDO("mysql:host=localhost;port=3306;dbname=project", "root", ""
                    ,[\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
            } catch (\Exception $a) {
                die('error:' . $a->getMessage());
            }
        }
        return $connect;
    }

    public static function getUser($email): array
    {
        $sth = Db::connectBd()->prepare("SELECT * FROM `users` WHERE `email` = ?");
        $sth->execute(array("$email"));
        $array = $sth->fetch(\PDO::FETCH_ASSOC);
        $id = $array['id'];
        if ($array['email'] == $email) {
            return $array=[1];
        } else {
            return $array=[0];
        }
    }

    public static function getMessage(): array
    {
        $sth = Db::connectBd()->prepare("SELECT * FROM `message`");
        $sth->execute();
        $array = $sth->fetchAll(\PDO::FETCH_ASSOC);

        return $array;
    }

    public static function getInf($email)
    {
        $sth = Db::connectBd()->prepare("SELECT * FROM `users` WHERE `email` = ?");
        $sth->execute(array("$email"));
        $array = $sth->fetch(\PDO::FETCH_ASSOC);
//        if ($array === false){
//            echo ''
//        }

        return $array;
    }

    public static function getName($id): string
    {
        $sth = Db::connectBd()->prepare("SELECT * FROM `users` WHERE `id` = ?");
        $sth->execute(array("$id"));
        $array = $sth->fetch(\PDO::FETCH_ASSOC);

        return $array['name'];
    }
}
