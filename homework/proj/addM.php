<?php
require_once 'bdAndSession.php';
require_once 'app/Model/User.php';
require_once 'app/Model/Message.php';
require_once 'app/Controller/addMessage.php';
require_once 'Base/Db.php';

use App\Controller\Controller;

$newA = new Controller();
$newA->addMessage();

header('Location: app/view/blog.php');
