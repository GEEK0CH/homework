<?php
namespace App\Model;

use Base\Db;

class Message
{
    private $id;
    private $text;
    private $date;
    private $user_id;
    /** @var User */
    private $image;

    public static function deleteMessage(int $messageId)
    {
        $db = Db::getInstance();
        $query = "DELETE FROM messages WHERE id = $messageId";
        return $db->exec($query, __METHOD__);
    }

    public function save($user_id, $date, $text, $image)
    {
        $res = Db::connectBd()->exec(
            "INSERT INTO `message` (
                    `user_id`, 
                   `text`, 
                    `date`,
                    `image`
                    ) VALUES (
                    '$user_id', 
                    '$text', 
                    '$date',
                    '$image'
                )"
        );

        return $res;
    }

    public static function getList(int $limit = 10, int $offset = 0): array
    {
        $db = Db::getInstance();
        $data = $db->fetchAll(
            "SELECT * fROM messages LIMIT $limit OFFSET $offset",
            __METHOD__
        );
        if (!$data) {
            return [];
        }

        $messages = [];
        foreach ($data as $elem) {
            $message = new self($elem);
            $message->id = $elem['id'];
            $messages[] = $message;
        }

        return $messages;
    }


    public static function getUserMessages(int $userId, int $limit): array
    {
        $db = Db::getInstance();
        $data = $db->fetchAll(
            "SELECT * fROM messages WHERE author_id = $userId LIMIT $limit",
            __METHOD__
        );
        if (!$data) {
            return [];
        }

        $messages = [];
        foreach ($data as $elem) {
            $message = new self($elem);
            $message->id = $elem['id'];
            $messages[] = $message;
        }

        return $messages;
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
    public function getText(): string
    {
        return $this->text;
    }



    public function loadFile(string $file)
    {
        if (file_exists($file)) {
            $image = $this->genFileName();
            move_uploaded_file($file,getcwd() . '/images/' . $image);
        }
        return $image;
    }

    private function genFileName()
    {
        return sha1(microtime(1) . mt_rand(1, 100000000)) . '.jpg';
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }



}
