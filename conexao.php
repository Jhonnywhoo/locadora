<?php

$url = "localhost";
$database = "locadora";
$username = "root";
$password = "";

$conn = mysqli_connect($url, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
