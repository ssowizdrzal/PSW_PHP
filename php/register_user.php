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

if($uname=="" && isset($_SESSION['uname'])){
    $uname = $_SESSION['uname'];
}
if ($uname != "" && $password != "" && $name != "" && $surname != ""){

    $result = mysqli_query($conn, "SELECT count(*) FROM Users WHERE user_login='".$uname."'"); //user_login, user_password, user_name, user_surname
    $row = mysqli_fetch_row($result);
    $count = $row[0];

    if ($count > 0) {
        if(isset($_SESSION['uname'])){
            $sql = "UPDATE Users SET user_password='$password' WHERE user_login=$uname";
            $result = mysqli_query($conn,$sql);  
            $sql = "UPDATE Users SET user_name='$name' WHERE user_login=$uname";
            $result = mysqli_query($conn,$sql);  
            $sql = "UPDATE Users SET user_surname='$surname' WHERE user_login=$uname";
            $result = mysqli_query($conn,$sql);  
            echo 1;
        }else{
            echo "Please insert different data";
        }
    }
    else{

        $sql_insert = "INSERT INTO Users (user_login, user_password, user_name, user_surname)
        VALUES ('$uname', '$password' , '$name', '$surname')"; 

        if ($conn->query($sql_insert) === TRUE) {
            echo 1;
        } else {
            die( "Error connection to database");
        }
    }
    die();
}
echo 0;
