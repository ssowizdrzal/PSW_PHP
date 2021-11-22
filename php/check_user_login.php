<?php

$servername = "localhost";
$username = "admin";
$password = "admin";
$database = "LOLPORTAL";

// Create connection to database
$conn = new mysqli($servername, $username, $password, $database);
 
 if($conn->connect_errno ) {
    echo("Connect to database failed");
    exit();
 }

$user = $_POST['username'];
$$user = $_POST['password'];

if ($user != "" && $$user != ""){

    $sql_query = "SELECT count(*) as cntUser FROM Users WHERE user_login='".$user."' AND user_password='".$$user."'";
    
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_row($result);

    $count = $row[0];

    if($count > 0){
        session_start();
        $_SESSION['uname'] = $user;
        echo 1;
    }else{
        echo 0;
    }
}
