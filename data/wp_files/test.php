<?php
$host = 'mariadb'; // The service name defined in your docker-compose.yml
$user = 'db_user';
$pass = 'db_password';
$dbname = 'wordpress_db';

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the database!";
?>