<?php
namespace App\Model;

require_once 'bdAndSession.php';

class User
{
    private $id;
    private $name;
    private $date;
    private $password;
    private $email;

    public function __construct($id = NULL , $name=0 , $date=0, $password=0, $email=0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
        $this->date = $date;
        $this->email = $email;
    }


    public function save($name , $date, $password, $email)
    {
        $res = connectBd()->exec(
            "INSERT INTO `users` (
                    `name`, 
                   `password`, 
                    `date`,
                    `email`
                    ) VALUES (
                    '$name', 
                    '$password', 
                    '$date',
                    '$email'
                )"
        );


        return $res;
    }


    public function comparePassword($password, $confirmPassword): string
    {
        if ($password == $confirmPassword) {
            $comparePassword = $password;
        } else {
            die('Passwords do not match');
        }

        return $comparePassword;
    }

    public function lengthPassword($comparePassword)
    {
        $check = strlen($comparePassword);
        if ($check <= 4) {
            die('Password must be more than 4 characters');
        } else {
            return $comparePassword;
        }
    }

    public static function getPasswordHash(string $comparePassword)
    {
        return sha1($comparePassword . 'wk,cyr.tnwf2');
    }

    public function checkLastInsertId()
    {
        return connectBd()->lastInsertId();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function isAdmin($array): bool
    {
        if ($array['id'] == ADMIN_ID){
            return true;
        }
        return false;
    }
}