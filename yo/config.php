<?php
// config.php - Simple configuration for XAMPP

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'list');
define('DB_USER', 'root');
define('DB_PASS', '');

// Start Session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Database Connection Function
function db_connect() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Authentication Functions
function is_logged_in() {
    return isset($_SESSION['user_id']);
}

function require_login() {
    if (!is_logged_in()) {
        header("Location: login.php");
        exit();
    }
}
?>