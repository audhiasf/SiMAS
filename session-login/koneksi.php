<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "simas_db";
    $mysqli = mysqli_connect($host, $user, $pass, $db);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }