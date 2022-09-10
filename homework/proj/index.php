<?php

require_once 'bdAndSession.php';

if (isUserAuthorization())
{
    header('Location: form.php');
    die;
} else {
    header('Location: blog.php');
    die;
}
