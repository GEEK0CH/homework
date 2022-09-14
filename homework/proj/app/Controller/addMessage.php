<?php
namespace App\Controller;

use App\Model\Message;

//require_once '../../bdAndSession.php';

class Controller
{

    public function addMessage()
    {
        $newB = new Message();
        $text = (string) $_POST['text'];
        if (empty($text)) {
            echo 'Сообщение не может быть пустым';
        } else {
            $user_id = $_SESSION['id'];
            $date = date('Y-m-d H:i:s');
            var_dump($_FILES['image']);

        }
        if (isset($_FILES['image']['tmp_name'])) {
            $image = $newB->loadFile($_FILES['image']['tmp_name']);

        }
        $newB->save($user_id, $date, $text, $image);

        return 1;
    }

}
