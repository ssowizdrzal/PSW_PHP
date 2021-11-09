<?php
if(isset($_SESSION['uname'])){
   
}
else{
    echo "no user" ;
    header("Location: /". firstDir(dirname($_SERVER['PHP_SELF'])) );
}