<?php

//create a connection 
$serverName = "127.0.0.1"; 
$connectionInfo = array("Database"=>"attendance_db", 
                        "UID"=>"asyaakkus", 
                        "PWD"=>"higuys"); 

//make $conn variable 
$conn = sqlsrv_connect($serverName, $connectionInfo);

//check connection validity 
if ($conn) {
    echo "Connection Established";
} else {
    echo "Connection Failed"; 
    die(print_r(sqlsrv_errors(), true));
}

//insert values into database 
$password = $_POST['password']; 
$firstname = $_POST['firstname']; 
$lastname = $_POST['lastname'];

$sql = "INSERT INTO attendance_data(password, firstname, lastname) VALUES (?, ?, ?)"; 
$params = array($password, $firstname, $lastname); 
$result = sqlsrv_query($conn, $sql, $params); 

//close the connection 
sqlsrv_close($conn);