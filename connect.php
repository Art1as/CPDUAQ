<?php
    $servername = "localhost";
    $db = "cpduaq_bd";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql::host=$servername;
                        dbname=$db", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,
                            PDO::ERRMODE_EXCEPTION);
        echo "Connected sucessfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>