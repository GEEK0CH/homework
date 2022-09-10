<?php
require_once 'bdAndSession.php';

$id = $_GET['id'];
connectBd()->exec(
    "DELETE FROM message WHERE id = '$id'");

header('Location: ../blog.php');
