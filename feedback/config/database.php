<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'Abir');
define('DB_PASS', '123456');
define('DB_NAME', 'php_dev');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check the connection
if($conn->connect_error) {
    die('Error connecting to database'. $conn->connect_error);
}