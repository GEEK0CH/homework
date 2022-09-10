<?php
require_once 'bdAndSession.php';
require_once 'app/Model/User.php';
require_once 'app/Model/Message.php';
require_once 'app/Controller/addMessage.php';

use App\Model\User;
use App\Model\Message;
use App\Controller\Controller;

$newA = new Controller();
$newA->addMessage();

header('Location: blog.php');
