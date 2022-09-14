<?php

require_once 'bdAndSession.php';

if (isUserAuthorization())
{
    header('Location: app/View/form.php');
    die;
} else {
    header('Location: app/View/blog.php');
    die;
}
