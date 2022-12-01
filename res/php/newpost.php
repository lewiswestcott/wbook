<?php

session_start();

if (!isset($_SESSION['UID']))
{
    header("Location: ../../login.php");
}

if (!isset($_POST))
{
    die("Missing POST Values");
}

require("connect.php");

//The SQL statement

$SQL = "INSERT INTO `posts`(`UID`, `PID`, `post`, `TIMESTAMP`) VALUES (?,null,?,CURRENT_TIMESTAMP())";

//Prepares the SQL statement for execution.
$stmt = mysqli_prepare($connect, $SQL);

mysqli_stmt_bind_param($stmt, 'ss', $_SESSION['UID'], $_POST['post']);

//Executes the prepared query.
if (mysqli_stmt_execute($stmt))
{
    header('Location: ../../index.php');
}
else
{
    die("Error: " . mysqli_error($connect));
    var_dump($stmt);
}

//Closes the prepared statement.
mysqli_stmt_close($stmt);