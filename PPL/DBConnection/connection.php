<?php

$host = 'localhost';
$dbname = 'db_nutriducation';
$username = 'root';
$password = '';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
