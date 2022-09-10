<?php
require_once 'bdAndSession.php';
require_once 'app/Model/User.php';
require_once 'app/Model/Message.php';
require_once 'app/Controller/addMessage.php';

use App\Model\User;
use App\Model\Message;
use App\Controller\Controller;


echo "Имя пользователя {$_SESSION['name']} your id={$_SESSION['id']}";
?> <form action="form.php">
    <button type="submit">Выход</button>
</form>

<style>
    .message { margin: 5px 0 0 5px; border: 1px solid grey; width: 200px; min-height: 100px;}
    .author { margin-left: 10px; }
    .text { padding-left: 15px; padding-top: 15px; }
    .date {color: grey; font-size: 11px;}
    .admin a { color: #46468b; float: right; padding-right: 15px; }
</style>

Список сообщений: <br>
<?php

$adm = new User;
$result = $adm->isAdmin($_SESSION);

$del = new Message();
$messages = getMessage();
?>


<?php if($messages !== NULL ): ?>
    <?php foreach ($messages as $message): ?>
        <div class="message">
            <?php if($result == true): ?>
                <div class="admin">
                    <a href="deleteM.php/?id=<?=($message['id']);?>">delete</a>
                </div>
            <?php endif; ?>
            <span class="date"><?=$message['date'];?> </span>
            <?php if($message['date'] !== NULL):?>
                <span class="author"><?=getName($message['user_id']);?></span>
            <?php else: ?>
                <span class="author">Сообщение от удаленного пользователя</span>
            <?php endif; ?>
            <div class="text"><?=$message['text'];?></div>
            <?php if($message['image'] !== ''):?>
                <div><img src="/images/<?=$message['image'];?>" style="width: 150px; margin-bottom: 2px;margin-left: 2px;"></div>
            <?php endif;?>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    Сообщений пока нет
<?php endif; ?>

Добавить сообщение
<form enctype="multipart/form-data" action="addM.php" method="post">
    <textarea style="width: 250px; height: 150px;" type="text" value="" name="text"></textarea><br><br>
    Изображение: <input type="file" name="image"><br>
    <input type="submit" value="Отправить">
</form>