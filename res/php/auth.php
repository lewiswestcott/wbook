<?php

require('connect.php');

if (!isset($_POST))
{
    die("Missing POST Values");
}
if (!isset($_POST['email'], $_POST['password']))
{
    die('Please fill both the email and password fields!');
}

$email = $_POST['email'];
$password = $_POST['password'];

session_start();

$SQL = "SELECT * FROM `users` WHERE `email` = '$email'";

$query = mysqli_query($connect, $SQL);

if (mysqli_num_rows($query) === 0)
{
    die("Invalid Email or Password");
}

$user = mysqli_fetch_assoc($query);

if (password_verify($password, $user['password']))
{
    $_SESSION['firstname'] = $user['firstname'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['UID'] = $user['UID'];
    $_SESSION['dob'] = $user['dob'];
    $_SESSION['joindate'] = $user['joindate'];
    $_SESSION['lastname'] = $user['lastname'];
    $_SESSION['password'] = $user['password'];

    header('Location: ../../index.php');

}
else
{
    die("Invalid Email or Password");
} 


?>