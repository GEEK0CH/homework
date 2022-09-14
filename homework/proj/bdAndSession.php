<?php

const ADMIN_ID = '1';

session_start();

function isUserAuthorization(): bool
{
    return empty($_SESSION['id']);
}
