<?php
/*
$servername = "localhost";
$password = "password"; 
$firstname = "firstname"; 
$lastname = "lastname"; 
$dbname = "attendance_db"
*/
//create a connection 
$serverName = "localhost"; 
$connectionInfo = array("DB"=>"attendance_db", 
                        "PW"=>"password", 
                        "FN"=>"firstname", 
                        "LN"=> "lastname"); 
$conn = sqlsrv_connect($serverName, $connectionInfo);
//check connection 
if ($conn) {
    echo "Connection Established";
} else {
    echo "Connection Failed"; 
    die(print_r(sqlsrv_errors(), true));
}
?>