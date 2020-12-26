<?php
define('USER', 'ybNq4cirus');
define('PASSWORD', 's00IjwuIE3');
define('HOST', 'remotemysql.com');
define('DATABASE', 'ybNq4cirus');

    try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>