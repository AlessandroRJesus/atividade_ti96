<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "banco";

    // conexao criada

    $conn = new mysqli($servername, $username, $password, $dbname);

    // conexao check

    if ($conn->connect_error) {
        die("connection failed: " . $conn->connect_error);
    }
?>