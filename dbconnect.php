<?php
$servername = "localhost";
$username = "root";
$password = "synamen";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    echo "Connection failed!";
}
