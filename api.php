<?php
/**
 * Created by IntelliJ IDEA.
 * User: Luuk
 * Date: 5-6-2018
 * Time: 17:10
 */

//Require the DB connection file
require "dbh.inc.php";

//Change the name of the table below
//USE THE STANDARD VALUE "API" IF YOU ARE USING THE INCLUDED SQL DATA
$table = "API";

//Retrieve all the data from the DB
$query = "SELECT * FROM $table";
$sql = $conn->query($query);

//Create a new array
$rows = array();

//Set each row into the array
while ($row = $sql->fetch_assoc()) {
    $rows[] = $row;
}

//Display the JSON
print json_encode($rows);