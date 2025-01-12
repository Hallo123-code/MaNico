<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "PHP Version: " . PHP_VERSION . "<br>";
echo "PHP ini file: " . php_ini_loaded_file() . "<br>";

if (class_exists('mysqli')) {
    echo "MySQLi is loaded and available!<br>";
} else {
    echo "MySQLi is NOT loaded!<br>";
    die("Fatal Error: MySQLi extension is missing.");
}

$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name     = "litmind_demo";

$conn = new mysqli($servername, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Database connection successful!";
?>
