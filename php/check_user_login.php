<?php

$servername = "localhost";
$username = "admin";
$password = "admin";
$database = "LOLPORTAL";

// Create connection to database
$conn = new mysqli($servername, $username, $password, $database);
 
 if($conn->connect_errno ) {
    echo("Connect failed: %s<br />". $conn->connect_error);
    exit();
 }

$uname = $_POST['username'];
$password = $_POST['password'];

if ($uname != "" && $password != ""){

    $sql_query = "SELECT count(*) as cntUser FROM Users WHERE user_login='".$uname."' AND user_password='".$password."'";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        session_start();
        $_SESSION['uname'] = $uname;
        echo 1;
    }else{
        echo 0;
    }
}
