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
    <title>Home Page</title>

      <!-- <meta> tags provide search engines with -->
      <!-- information used to catalog a site      -->
      <meta name = "keywords" content = "web page, design,  
         HTML5, tutorial, league of legends, game, player,
          lol, league, best, reddit">
      <meta name = "description" content = "This website will 
         help you learn the basics information about the game called
         League of Legends. W will touch multiple basic topics,
         feel free to explore.">
         
        <link rel="stylesheet" href="css/global.css">
        <?php include(realpath($_SERVER["DOCUMENT_ROOT"]).'\\' . firstDir(dirname($_SERVER['PHP_SELF'])) . '\php\preferencjeuzytkownika.php'); ?>
        <script src="js/on_press.js"></script>


</head>
<body onkeydown="showChar(event);">
    <header class="header">
        <div class="header-content">
            <img src="./img/lol-icon.png" alt="lol logo"> 
            <h1 class="greeting" > &#x2661; Welcome,  </h1>
            <?php include(realpath($_SERVER["DOCUMENT_ROOT"]).'\\' . firstDir(dirname($_SERVER['PHP_SELF'])) . '\php\navbar.php'); ?>
          <script src="js/welcome.js"></script>
        </div>
         
        <hr class="global-hr">  

    </header>
    <main>
        <section class="section_right">
            <div id="przenikanie">
                <img class="obraz-1" src="img/lol400-1.jpg" alt="image lol 1 "/>
                <img class="obraz-2" src="img/lol400-2.jpg" alt="image lol 2 " />
            </div>
        </section>
    
        <section class="blog-posts">
        <a href="./html/zmiendane.php">Zmien dane konta</a> 
            <h2 id="top-header" ><b>Recent News</b></h2>
            <p>Check our recent news</p>
            <p>Access to our website is completly free ( 0 &#8364; )!</p>
            <article>
                <h3>
                    Beyond Gaming mid laner Maoan has allegedly leaked draft strats for betting purposes
                </h3>
                <p >
                    During the 2021 World Championship, Maoan violated Rule 9.3 of the 2021 World Championship Ruleset, which prohibits association with gambling. 
                    Competitive integrity is the foundation for our sport and we take all violations of our ruleset extremely seriously. 
                    The Competitive Operations team obtained definitive evidence showing Maoan provided inside information to a friend for the purposes of wagering on today's match. 
                    Maoan will be suspended for the remained fo the 2021 World Champinoship, and may be subject to additional penalties following a full investigation.
                </p>
            </article>
        
            <article>
                <h3>
                    People should respect Garen more
                </h3>
                <p>To preface this, I used to be quite athletic, and by virtue of my handsome face, I worked part-time as a model. However, I got old, and my metabolism slowed down,
                     and I couldn’t keep slim while eating shit like before. Last Christmas, I got pretty chubby.
                    <br>   <br>
                    Now, until recently, I just let this be, but over the last two weeks, I went on a diet, didn’t eat a lot, drank tons of water and within two weeks lost 5KG.
                    <br>   <br>
                    But what struck me the most was halfway through the week, I wanted to eat so badly. I wanted to buy a sleeve of cookies and nom them down. But in my mind,
                     I said to myself, ‘I will not falter,’ and that’s when it hit me. Garen deserves a lot more respect; that man never falters; in all the years he’s been around,
                      he never did. I only just managed for two weeks, but he’s managed for a lifetime.
                    <br>   <br>
                    He deserves more credit. He may not be the brightest spark, but he was something we should all strive for—the will to never falter.
                </p>
            </article>
        
            <article>
                <h3>Jhin's W is inconsistent and needlessly confusing.</h3>
                <p>
                    Jhin's W looks like a projectile - but it's not a projectile. Jhin's W is blocked by Wind Wall - but it's not a projectile. 
                    Despite being blocked by Wind Wall, Jhin's W is not blocked by Samira's Blade Whirl.    
                </p>
            </article>
            <article>
                <h3>
                    Beyond Gaming mid laner Maoan has allegedly leaked draft strats for betting purposes
                </h3>
                <p >
                    During the 2021 World Championship, Maoan violated Rule 9.3 of the 2021 World Championship Ruleset, which prohibits association with gambling. 
                    Competitive integrity is the foundation for our sport and we take all violations of our ruleset extremely seriously. 
                    The Competitive Operations team obtained definitive evidence showing Maoan provided inside information to a friend for the purposes of wagering on today's match. 
                    Maoan will be suspended for the remained fo the 2021 World Champinoship, and may be subject to additional penalties following a full investigation.
                </p>
            </article>
        
            <article>
                <h3>
                    People should respect Garen more
                </h3>
                <p>To preface this, I used to be quite athletic, and by virtue of my handsome face, I worked part-time as a model. However, I got old, and my metabolism slowed down,
                     and I couldn’t keep slim while eating shit like before. Last Christmas, I got pretty chubby.
                    <br>   <br>
                    Now, until recently, I just let this be, but over the last two weeks, I went on a diet, didn’t eat a lot, drank tons of water and within two weeks lost 5KG.
                    <br>   <br>
                    But what struck me the most was halfway through the week, I wanted to eat so badly. I wanted to buy a sleeve of cookies and nom them down. But in my mind,
                     I said to myself, ‘I will not falter,’ and that’s when it hit me. Garen deserves a lot more respect; that man never falters; in all the years he’s been around,
                      he never did. I only just managed for two weeks, but he’s managed for a lifetime.
                    <br>   <br>
                    He deserves more credit. He may not be the brightest spark, but he was something we should all strive for—the will to never falter.
                </p>
            </article>
        
            <article>
                <h3>Jhin's W is inconsistent and needlessly confusing.</h3>
                <p>
                    Jhin's W looks like a projectile - but it's not a projectile. Jhin's W is blocked by Wind Wall - but it's not a projectile. 
                    Despite being blocked by Wind Wall, Jhin's W is not blocked by Samira's Blade Whirl.    
                </p>
            </article>
            <article>
                <h3>
                    Beyond Gaming mid laner Maoan has allegedly leaked draft strats for betting purposes
                </h3>
                <p >
                    During the 2021 World Championship, Maoan violated Rule 9.3 of the 2021 World Championship Ruleset, which prohibits association with gambling. 
                    Competitive integrity is the foundation for our sport and we take all violations of our ruleset extremely seriously. 
                    The Competitive Operations team obtained definitive evidence showing Maoan provided inside information to a friend for the purposes of wagering on today's match. 
                    Maoan will be suspended for the remained fo the 2021 World Champinoship, and may be subject to additional penalties following a full investigation.
                </p>
            </article>
        
            <article>
                <h3>
                    People should respect Garen more
                </h3>
                <p>To preface this, I used to be quite athletic, and by virtue of my handsome face, I worked part-time as a model. However, I got old, and my metabolism slowed down,
                     and I couldn’t keep slim while eating shit like before. Last Christmas, I got pretty chubby.
                    <br>   <br>
                    Now, until recently, I just let this be, but over the last two weeks, I went on a diet, didn’t eat a lot, drank tons of water and within two weeks lost 5KG.
                    <br>   <br>
                    But what struck me the most was halfway through the week, I wanted to eat so badly. I wanted to buy a sleeve of cookies and nom them down. But in my mind,
                     I said to myself, ‘I will not falter,’ and that’s when it hit me. Garen deserves a lot more respect; that man never falters; in all the years he’s been around,
                      he never did. I only just managed for two weeks, but he’s managed for a lifetime.
                    <br>   <br>
                    He deserves more credit. He may not be the brightest spark, but he was something we should all strive for—the will to never falter.
                </p>
            </article>
        
        </section>
        <script src="js/przycisk.js"></script>
        
    
        <p class="go-to-top">Go to the
            <a href="#top-header">top</a>.
        </p>
     
    </main>
    <footer class="footer">
        <p>Autor: Dominik Sandura, Sebastian Sowizdrzał</p>
        <a href="mailto:242405@student.pwr.edu.pl">242405@student.pwr.edu.pl</a> - <a href="mailto:242467@student.pwr.edu.pl">242467@student.pwr.edu.pl</a>
        
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
</body>
</html>
