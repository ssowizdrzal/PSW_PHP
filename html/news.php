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
        <article class="artykul">

            <h2 onmouseover="makeThemRed()" onmouseout="makeThemDefault()">Czym są Mistrzostwa Świata?</h2>
            <div class="text-gap" onmousemove="makeThemGreen()"> 
                Mistrzostwa Świata League of Legends (nazywane również tylko Mistrzostwami) to odbywający się co roku najwyższej klasy międzynarodowy turniej, podczas którego najlepsze drużyny ze wszystkich lig regionalnych walczą o Puchar Przywoływacza i tytuł Mistrza Świata. 
                Walka o zakwalifikowanie się do tych rozgrywek trwa cały rok. Bierze w niej udział ponad 800 zawodowych graczy należących do 100 profesjonalnych drużyn z całego świata zrzeszonych w 12 ligach e-sportu LoL. Co roku gospodarzem imprezy jest inny region — w tym roku drużyny będą walczyć w stolicy Islandii, Reykjavíku.
                Mistrzostwa zaczną się od rundy wstępnej 5 października i zakończą się finałem 6 listopada. Szczegółowy harmonogram poszczególnych etapów podajemy poniżej.
                Mistrzostwa rozgrywane są w trzech etapach: runda wstępna, faza grupowa i faza pucharowa (ćwierćfinał, półfinał i finał). Poniżej znajdują się szczegółowe informacje na temat każdej fazy.
                Turniej w całości odbędzie się w hali A centrum sportowego Laugardalshöll w Reykjavíku na Islandii.
                Rozstawienie regionów zależy od ich wcześniejszych osiągnięć na arenie międzynarodowej. Jak zwykle silne regiony wprowadzają niektóre ― lub wszystkie ― drużyny prosto do fazy grupowej, pozostałe regiony otrzymały mniej miejsc w fazie grupowej i/lub zaczną od rundy wstępnej.
            </div>

        </article>

        <article class ="artykul-2">
            <h2 onmouseover="makeThemRed()" onmouseout="makeThemDefault()">The origin story of League of Legends</h2>
            <div class="text-gap-2" onmousemove="makeThemGreen()"> 
                Before the millions of players, before the billions in revenue, before the esports tournaments that topped 100 million spectators, League of Legends was more of an idea than a game. And the game that did exist in the year-long lead up to its release wasn’t very good.
                “The game really sucked for a long time,” said Riot Games producer Jeff Jew, who was an intern at the time. “Nobody [at Riot] wanted to play the game because it was really bad. But they forced us to.”
                Jew and a small crew of interns and artists working on the game’s many characters often spent their time playing other games as they waited for the development team to catch up to the work they were doing. One of the team leads caught on and told them they had to play League of Legends every day. So they did, begrudgingly at first. But then something happened about six months before the game was set to roll out to the public: The playtesters and interns started playing League not because they had to, but because they wanted to.
                “That was when we realized we had something that could work,” Jew said. “And it was pretty damn close to launching.”
                That launch on Oct 27, 2009 was just one memorable moment in Riot Game’s 10-year journey down a road punctuated by terror, wild leaps of faith, and powered by an army of interns and a lot of luck. 
            </div>

        </article>

        <article class ="artykul-3">
            <h2 onmouseover="makeThemRed()"  onmouseout="makeThemDefault()">What is League of Legends?</h2>
            <div class="text-gap-3" onmousemove="makeThemGreen()"> 
                ‘League of Legends’, or LoL, has been the most played game in the world since 2012. Riot Games has held control over the online gaming scene for over half a decade. If you identify as a gamer, then you have definitely heard of LoL. League of Legends is a complicated game that has a steep learning curve, but with knowledge comes power.
                League of Legends is often categorized as a MOBA, or multiplayer online battle arena, but League has a lot of different genre elements. MOBAs typically have RTS, or real-time strategy, components throughout the game. In a nutshell, League of Legends can be described as a MOBA that has two teams, five players each, fight against each other with an objective in mind. MOBAs, like League of Legends, often require more dexterity and strategy than lightning-fast trigger finger reactions.  
            </div>

        </article>

        <p>Spoilery odnośnie najnowszego odcinka Lol series sezon 3!</p>

        <!-- <button id="myBtn">Pokaż spoiler</button>
        <script src="../js/przycisktajemnawiadomosc.js"></script>
        -->
        <p id="demo"></p>
        <br>
        <button onclick="zmiennaczerwonetlo()">zmiennaczerwonetlo</button>
    </main>
    <!--Footer bar-->
    <footer class="footer" id="news_footer">
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