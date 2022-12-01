<?php

session_start();

if (isset($_SESSION['UID']))
{
    unset($_SESSION['UID']);
}

session_destroy();

header('Location: ../../index.php');
