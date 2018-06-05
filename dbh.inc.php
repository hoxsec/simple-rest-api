<?php
/**
 * Created by IntelliJ IDEA.
 * User: Luuk
 * Date: 5-6-2018
 * Time: 17:10
 */

//ADD YOUR OWN DB CREDENTIALS BELOW!
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "app";

$conn = new mysqli($host, $username, $password, $dbname);

//COMMENT OUT BELOW TO TEST THE CONNECTION
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";