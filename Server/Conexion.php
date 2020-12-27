<?php
$servidor = "remotemysql.com";
$db = "ybNq4cirus";
$username = "ybNq4cirus";
$password = "s00IjwuIE3";
// Create connection
$conn = new mysqli($servidor, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*
define('USER', 'ybNq4cirus');
define('PASSWORD', 's00IjwuIE3');
define('HOST', 'remotemysql.com');
define('DATABASE', 'ybNq4cirus');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
<?php
?>*/?>