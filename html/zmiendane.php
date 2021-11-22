<?php
require(realpath($_SERVER["DOCUMENT_ROOT"]).'\PSW_PHP\php\functions.php');


?>
<?php
       
        if(isset($_POST["mybutton"])){
            setcookie("styl",$_POST["mybutton"], time() + (86400 * 30), "/");
            
            echo "<meta http-equiv='refresh' content='0'>";

            
        } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmień dane</title>

      <!-- <meta> tags provide search engines with -->
      <!-- information used to catalog a site      -->
      <meta name = "keywords" content = " lol, league, worlds, floting, see, positions, list, dropdown, nice, css">
      <meta name = "description" content = "See fully functional 3 leveled dropdown menu with extra css styling)">
      
        <link rel="stylesheet" href="../css/global.css">
        <link rel="stylesheet" href="../css/csscss/news.css">
        <?php include(realpath($_SERVER["DOCUMENT_ROOT"]).'\\' . firstDir(dirname($_SERVER['PHP_SELF'])) . '\php\preferencjeuzytkownika.php'); ?>

        <script src="../js/mouse_events_news.js"></script>
        <script src="../js/kolekcje.js"></script>

</head>
<body onmousedown="showCoords(event) ">
    <header class="header">
        <div class="header-content">
            <div class="parent-animacja"> 
                <div class="animacja">
                    <img src="../img/lol-icon.png" alt="lol logo"> 
                </div>
            </div>
            <h1 > </h1>
            <?php include(realpath($_SERVER["DOCUMENT_ROOT"]).'\\' . firstDir(dirname($_SERVER['PHP_SELF'])) . '\php\navbar.php'); ?>

        </div>
         
        <hr class="global-hr">  

    </header>
    <main>
    <section>
         <article>
            <h3>Zmień dane konta!! </h3>
            
            <form class="form-personal" method = "post" action = "../php/form_details.php" autocomplete="on">
      
               <input type = "hidden" name = "recipient"
                  value = "#">
               <input type = "hidden" name = "subject" 
                  value = "Personal Form">
               <input type = "hidden" name = "redirect" 
                  value = "#"> 

                
                
                  <div class="separated">
                     <label>Password</label>
                     <input name = "password" type = "text" size = "25" autofocus>
                    
                  </div>
             

              
                  <div class="separated">
                     <label>Name</label>
                     <input name = "name" type = "text" size = "25" autofocus>
                    
                  </div>
             

              
                <div class="separated">
                   <label>Surname</label>
                   <input name = "surname" type = "text" size = "25" required>
                  
                </div>

               <div class="form-buttons">
                    <div class="separated">
                        <input type = "submit" value = "Submit">
                        <input type = "reset" value = "Clear">
                    </div>  
                
               </div>   
            </form>
 
         </article>
       </section>
    </main>
    <!--Footer bar-->
    <footer class="footer" id="news_footer">
        <p>Autor: Dominik Sandura, Sebastian Sowizdrzał</p>
        <p><a href="mailto:242405@student.pwr.edu.pl">242405@student.pwr.edu.pl</a></p> <p><a href="mailto:242467@student.pwr.edu.pl">242467@student.pwr.edu.pl</a></p>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">  
        <input type = "submit" value = "styl1" name="mybutton">
        <input type = "submit" value = "styl2" name="mybutton">
        <input type = "submit" value = "styl3" name="mybutton">
        </form>

        <p>Click <a href = "/PSW_PHP/php/checkcookies.php">here</a>to read the saved cookie.</p>
        <?php 
        if(!isset($_SESSION['uname']))
        include(realpath($_SERVER["DOCUMENT_ROOT"]).'\\' . firstDir(dirname($_SERVER['PHP_SELF'])) .'\php\login_modal.php'); ?>   
    </footer> 
    <!--end of Footer bar-->
</body>
</html>