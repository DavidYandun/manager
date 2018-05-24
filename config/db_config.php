<?php
$servername = "managergy.mysql.database.azure.com";
$username = "dayAdmin@managergy";
$password = "ch0c0latE";
$dbname = "shop_manager_db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>