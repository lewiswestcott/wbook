<?php

session_start();

if (!isset($_POST))
{
    die("Missing POST Values");
}

require("connect.php");
//The SQL statement
$password = $_POST["password"];
$passwordhash = password_hash($password, PASSWORD_BCRYPT);

$SQL = "INSERT INTO `users`(`UID`, `firstname`, `lastname`, `dob`, `email`, `password`, `joindate`) VALUES (NULL,?,?,?,?,?,CURRENT_TIMESTAMP())";

//Prepares the SQL statement for execution.
$stmt = mysqli_prepare($connect, $SQL);

mysqli_stmt_bind_param($stmt, 'sssss', $_POST["firstname"], $_POST["lastname"], $_POST["dob"], $_POST["email"], ($passwordhash));

//Executes the prepared query.
if (mysqli_stmt_execute($stmt))
{
    header ("Location: ../../index.php");
}
else
{
    echo "Error: " . mysqli_error($connect);
}

//Closes the prepared statement.
mysqli_stmt_close($stmt);

?>