<?php

    $host = "plesk.remote.ac";
    $database = "WS233812_wbook";
    $username = "WS233812_wbook";
    $password = "Minicooper08!";

    $connect = mysqli_connect($host, $username, $password, $database);
    $connect->set_charset("utf8mb4");

    if (!$connect)
    {
        echo "Unable to connect to the database.";
    }

?>