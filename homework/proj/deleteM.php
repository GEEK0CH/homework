<?php
require_once 'bdAndSession.php';
require_once 'app/Model/User.php';
require_once 'app/Model/Message.php';
require_once 'app/Controller/addMessage.php';
require_once 'Base/Db.php';

use Base\Db;
use App\Controller\Controller;

$id = $_GET['id'];
Db::connectBd()->exec("DELETE FROM message WHERE id = '$id'");

header('Location: http://projct.loc/app/View/blog.php');
