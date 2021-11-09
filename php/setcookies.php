<?php
    if(isset($_POST["mybutton"])){
        setcookie("styl",$_POST["mybutton"], time() + (86400 * 30), "/");
        
        echo "<meta http-equiv='refresh' content='0'>";
    }
?>