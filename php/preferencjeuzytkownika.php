<?php
    if(isset($_COOKIE["styl"])){
        if($_COOKIE["styl"]=="styl1"){
            echo '<link rel="stylesheet" href="/PSW_PHP/css/phpcss/a.css">';
        }
        else if($_COOKIE["styl"]=="styl2"){
            echo '<link rel="stylesheet" href="/PSW_PHP/css/phpcss/b.css">';  
        }
        else if($_COOKIE["styl"]=="styl3"){
            echo '<link rel="stylesheet" href="/PSW_PHP/css/phpcss/c.css">';
        }
    }else{
        echo '<link rel="stylesheet" href="/PSW_PHP/css/phpcss/a.css">';
    }
?>
