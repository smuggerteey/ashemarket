<?php

    $serverName = "sql213.infinityfree.com";
    $userName = "if0_37068112";
    $password = "W3jteD8RPObkG";
    $dbName = "if0_37068112_ashesimarket";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
