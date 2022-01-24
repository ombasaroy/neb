<?php
//create variables

$servername = "localhost";
$username   = "root";
$password   = "";
$db_name = "neb";

//initiating connection and executing sql

$conn = new mysqli($servername,$username,$password,$db_name);

//checking if connection is successful

if($conn->connect_error){
    echo "Connection failed because" . $conn->connect_error;
}

?>