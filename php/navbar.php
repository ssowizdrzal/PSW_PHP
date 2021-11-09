   
           <!--Navigation bar-->
           <nav class="global-nav">
                <ul>
                    <li><a href="/PSW_PHP">Home</a></li>
                    <li><a href="/PSW_PHP/html/worlds.php">Worlds</a></li>
                    <li><a href="/PSW_PHP/html/news.php">News</a></li>
                    <li><a href="/PSW_PHP/html/forms.php">Forms</a></li>
                    <li><a href="/PSW_PHP/html/guide.php">Guide</a></li>
                    <?php 
       

                    if(!isset($_SESSION['uname'])){
                        echo ("<li><button id=\"myBtn\"><span>Login</span></button></li>");
                    }
                    else{
                        $path = realpath($_SERVER["SERVER_NAME"]).'\\' . firstDir(dirname($_SERVER['PHP_SELF'])) . '\php\logout.php';
                        echo ("<li> <a href=\"$path\">Logout (". $_SESSION["uname"] . ")</a></li>");
                       
                    }

                    ?>
                    
                </ul>
            </nav>
            <!--end of Navigation bar-->