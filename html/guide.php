<?php
require(realpath($_SERVER["DOCUMENT_ROOT"]).'\PSW_PHP\php\functions.php');


?>

<?php


    // if(isset($_POST["mybutton"])){
    //     setcookie("styl",$_POST["mybutton"], time() + (86400 * 30), "/");
            
    //     echo "<meta http-equiv='refresh' content='0'>";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>

      <!-- <meta> tags provide search engines with -->
      <!-- information used to catalog a site      -->
      <meta name = "keywords" content = "lol, league, league of legends, game, role, play, guide, help, top, mid, bot, jungle, supp, support, adc">
      <meta name = "description" content = "We will help you select right role for u">
        <link rel="stylesheet" href="../css/global.css">
        <link rel="stylesheet" href="../css/guide.css">
        <?php #include(realpath($_SERVER["DOCUMENT_ROOT"]).'\\' . firstDir(dirname($_SERVER['PHP_SELF'])) . '\php\preferencjeuzytkownika.php'); ?>
        <script src="../js/miniony.js"></script>
</head>
<body>
    <header class="header">
        <div class="header-content">
            <img src="../img/lol-icon.png" alt="lol logo"> 
            <h1 class="greeting" > &#x2661; Welcome  </h1>
            <?php include(realpath($_SERVER["DOCUMENT_ROOT"]).'\\' . firstDir(dirname($_SERVER['PHP_SELF'])) . '\php\navbar.php'); ?>

        </div>
         
        <hr class="global-hr">  

    </header>
    <main>
        <section class="flexbox-lanes">
            <h2>Check which role is right for you!</h2>
            <div class = "flexbox">
                <div><img src = "../img/lane_icons/Top_icon.png" alt = "Toplane icon">
                   <p>Due to the priority of Dragon, this position tends to remain isolated from the rest of the team. Ideal champions for this position are largely self-sufficient with tools to dominate in duels, scale by farming, or impact the map in other ways.</p></div>
                <div><img src = "../img/lane_icons/Jungle_icon.png" alt = "Jungle icon">
                   <p>This position provides a safe avenue to obtain gold and experience through jungle camps, without much interference from opponents. Due to camps being spread out across the map, the player can freely path around the map to influence lanes and secure objectives.</p></div>
                <div><img src = "../img/lane_icons/Middle_icon.png" alt = "Middle icon">
                   <p>The middle lane provides the fastest income of gold and experience due to its short distance. The lane's smaller space is also attractive for champions with bad defense (e.g. mages) to easily retreat to safety under turret. Being in the center of the map, this position has easy access to other sectors similar to the Jungler.</p></div>
                <div><img src = "../img/lane_icons/Bottom_icon.png" alt = "Bottom icon">
                   <p>Due to the priority of Dragon, the Support tends to prioritize control of this lane over others. Ideal champions for Bottom position can optimize the presence of the Support throughout the laning phase.</p></div>
                <div><img src = "../img/lane_icons/Support_icon.png" alt = "Supp icon">
                    <p>The support position tends to take a passive approach to gold generation in favor of funneling the active income to other positions. The player would instead succeed primarily through providing security or kill potential for their team. This objective is best executed in a side lane due to the close proximity to the opponents and wide area being hard for them to escape from.</p></div>
                </div>

                
        </section>
        <!-- <script src="../js/power_index.js"></script> -->
        <p><script src="../js/role.js"></script></p>
  
        <br>

        <div id="miniony">
             <button onclick="minion()">Stwórz</button>
             <button onclick="zabijminiona()">Zabij</button>
             <button onclick="zrobCannona()">Losowy minion w cannon</button>
             <button onclick="cannonPoczatek()">Dodaj cannon na poczatek</button>
            
        </div>
         <div id="hodowla">
                
             </div>
        
             <br>
             <button onclick="raportujLiczbeMinionow()">Raport</button>
             <button onclick="ParentNode()">Dowiedz sie gdzie są trzymane miniony: </button>
             <p id="demo"></p>
             <div id="demo2"></div>
             

    </main>
    <!--Footer bar-->
    <footer class="footer">
        <p>Autor: Dominik Sandura, Sebastian Sowizdrzał</p>
        <p><a href="mailto:242405@student.pwr.edu.pl">242405@student.pwr.edu.pl</a></p> <p><a href="mailto:242467@student.pwr.edu.pl">242467@student.pwr.edu.pl</a></p>
        
        <!-- <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">  
        <input type = "submit" value = "styl1" name="mybutton">
        <input type = "submit" value = "styl2" name="mybutton">
        <input type = "submit" value = "styl3" name="mybutton">
        </form> -->

        <p>Click <a href = "/PSW_PHP/php/checkcookies.php">here</a>to read the saved cookie.</p>
        <?php 
        if(!isset($_SESSION['uname']))
        include(realpath($_SERVER["DOCUMENT_ROOT"]).'\\' . firstDir(dirname($_SERVER['PHP_SELF'])) .'\php\login_modal.php'); ?>   
    </footer> 
    <!--end of Footer bar-->
</body>
</html>