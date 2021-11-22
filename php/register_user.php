<?php

$uname = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$surname = $_POST['surname'];

if ($uname != "" && $password != "" && $name != "" && $surname != ""){

    $result_mode;

    $result = mysqli_query($connect, "SELECT FROM Users (user_login, user_password, user_name, user_surname) WHERE user_login=$uname");

    if ($result->num_rows) {
        echo 'Login juz istnieje, modyfikacja !!';
        $sql = "UPDATE Users SET user_password='$password' WHERE user_login=$uname";
        $sql = "UPDATE Users SET user_name='$name' WHERE user_login=$uname";
        $sql = "UPDATE Users SET user_surname='$surname' WHERE user_login=$uname";
    }
    else{
        echo 'Login nie istnieje, rejestracja !!';
        $sql = "INSERT INTO Users (user_login, user_password, user_name, user_surname)
        VALUES ($uname, $password , $name, $surname )";      
    }
}
