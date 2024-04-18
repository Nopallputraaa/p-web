<?php
    $host = 'localhost';
    $username = 'root';
    $password = "";
    $database = 'todo-app';

    $db = new mysqli($host, $username, $password, $database);

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
?>