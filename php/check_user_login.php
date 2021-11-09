<?php

$user = array(
    "sebastian" => "haslo12345",
    "dominik" => "domi12345",
    "admin" => "admin"
);

$uname = $_POST['username'];
$password = $_POST['password'];

if ($uname != "" && $password != ""){

    $login=0;

    if (array_key_exists($uname, $user)) {
        if($user[$uname]==$password){
            $login=1;
        }
        else{

        }
    }
    else{

    }

    if($login == 1){
        session_start();
        $_SESSION['uname'] = $uname;
        echo 1;
    }else{
        echo 0;
    }

}