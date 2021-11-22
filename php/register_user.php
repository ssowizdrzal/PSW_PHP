<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$database = "LOLPORTAL";

$conn = new mysqli($servername, $username, $password, $database);
 
 if($conn->connect_errno ) {
    echo("Connect to database failed");
    exit();
 }


$uname = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$surname = $_POST['surname'];

if ($uname != "" && $password != "" && $name != "" && $surname != ""){

    $result = mysqli_query($conn, "SELECT FROM Users (user_login, user_password, user_name, user_surname) WHERE user_login=$uname");
    $row = mysqli_fetch_row($result);

    $count = $row[0];

    if ($count > 0) {
        echo 1;
        $sql = "UPDATE Users SET user_password='$password' WHERE user_login=$uname";
        $sql = "UPDATE Users SET user_name='$name' WHERE user_login=$uname";
        $sql = "UPDATE Users SET user_surname='$surname' WHERE user_login=$uname";
    }
    else{
        echo 1;
        $sql = "INSERT INTO Users (user_login, user_password, user_name, user_surname) 
        VALUES ($uname, $password , $name, $surname )";    
    }
    $result = mysqli_query($conn,$sql);  
    


}
