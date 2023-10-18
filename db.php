<?php

$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$dbname = "menudb";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function insertMenu($name, $description) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO menutable (menuname, menudesc) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $description);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }

    $stmt->close();
}

?>
