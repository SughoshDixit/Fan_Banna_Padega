<?php
define('DB_SERVER', getenv('DB_SERVER') ?: 'localhost');
define('DB_USERNAME', getenv('DB_USERNAME') ?: 'root');
define('DB_PASSWORD', getenv('DB_PASSWORD') ?: 'tiger');
define('DB_DATABASE', getenv('DB_DATABASE') ?: 'registration');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$db) {
    die('Database connection failed: ' . mysqli_connect_error());
}
?>
