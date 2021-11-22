<?php
session_start();

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

if(empty($uname) && isset($_SESSION['uname'])){
    $uname = $_SESSION['uname'];
}
if ($uname != "" && $password != "" && $name != "" && $surname != ""){

    $result = mysqli_query($conn, "SELECT count(*) FROM Users WHERE user_login='".$uname."'");

    $row = mysqli_fetch_row($result);

    $count = $row[0];
    

    if ($count > 0) {
        if(isset($_SESSION['uname'])){
           
            $sql_update1 = "UPDATE Users SET user_password = '".$password."' WHERE user_login='".$uname."'";
            $conn->query($sql_update1);
            $sql_update2 = "UPDATE Users SET user_name = '".$name."' WHERE user_login='".$uname."'";
            $conn->query($sql_update2);
            $sql_update3 = "UPDATE Users SET user_surname = '".$surname."' WHERE user_login='".$uname."'";
            $conn->query($sql_update3);
         
            echo 1;
        }else{
            echo "Uzytkownik juz istnieje";
        }
    }
    else{
        echo 1;
        $sql_insert = "INSERT INTO Users (user_login, user_password, user_name, user_surname)
        VALUES ('$uname', '$password' , '$name', '$surname')"; 

        if ($conn->query($sql_insert) === TRUE) {
            echo "New records created successfully <br>";
        } else {
            die( "Error: " . $sql_insert . "<br>" . $conn->error . "<br>");
        }
    }
    die();
}
echo 0;
