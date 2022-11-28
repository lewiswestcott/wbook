<?php

session_start();

if (!isset($_POST))
{
    die("Missing POST Values");
}

require("connect.php");
var_dump($_POST);
//The SQL statement
$password = $_POST["password"];
$passwordhash = password_hash($password, PASSWORD_BCRYPT);

$SQL = "INSERT INTO `users`(`UID`, `firstname`, `lastname`, `email`, `password`) VALUES (NULL,?,?,?,?)";

//Prepares the SQL statement for execution.
$stmt = mysqli_prepare($connect, $SQL);

mysqli_stmt_bind_param($stmt, 'ssss', $_POST["first"], $_POST["last"], $_POST["email"], ($passwordhash));

//Executes the prepared query.
if (mysqli_stmt_execute($stmt))
{
    echo "User Created";
}
else
{
    echo "Error: " . mysqli_error($connect);
}

//Closes the prepared statement.
mysqli_stmt_close($stmt);

?>