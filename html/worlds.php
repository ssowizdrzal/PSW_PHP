<?php
require(realpath($_SERVER["DOCUMENT_ROOT"]).'\PSW_PHP\php\functions.php');


?>
<?php
    if(isset($_POST["mybutton"])){
        setcookie("styl",$_POST["mybutton"], time() + (86400 * 30));
        
        echo "<meta http-equiv='refresh' content='0'>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "keywords" content = "web page, design,  
    HTML5, tutorial, league of legends, game, player,
     lol, league, best, reddit, play in, worlds, event
    esport, pro, Iceland">
     <meta name="description" content="This website will inform you about current Worlds 2021 event.">
    <title>Worlds 2021</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/csscss/table.css">
    <?php include(realpath($_SERVER["DOCUMENT_ROOT"]).'\\' . firstDir(dirname($_SERVER['PHP_SELF'])) . '\php\preferencjeuzytkownika.php'); ?>
    <script src="../js/kolekcje.js"></script>
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="logo-transormed">
                <img src="../img/lol-icon.png" alt="lol logo"> 

            </div>
            <h1>Worlds 2021 Play-In</h1>
            <?php include(realpath($_SERVER["DOCUMENT_ROOT"]).'\\' . firstDir(dirname($_SERVER['PHP_SELF'])) . '\php\navbar.php'); ?>

        </div>
         
        <hr class="global-hr">  

    </header>
    <main>
        <section class="worlds-right-table">
            <h2>Tabela informacji o turnieju</h2>
            <table class="table">
                <tr >
                    <th class="th" colspan="2">Worlds 2021 Play-In</th>
                </tr>
                <tr >
                    <td class="tdimage" colspan="2"><img src="../img/3233333333.png" alt="Worlds logo"> </td>
                </tr>
                <tr>
                    <td class="td" colspan="2">Informacje o turnieju</td>
                </tr>
                <tr>
                    <td class="td">Organizator</td><td class="tdright">Riot Games</td>
                </tr>
                <tr>
                <td class="td">Postęp turnieju </td>
                    <td class="tdright">
                        <meter min="0" max="100" low="33" high="66" optimum="80" value="90">
                        </meter>
                    </td>
                </tr>
                <tr>
                    <td class="td" colspan="2">Lokacja</td>
                </tr>
                <tr>
                    <td class="td">Region</td><td class="tdright">Cały świat</td>
                </tr>
                
                <tr>
                    <td class="td" colspan="2">Data
                    <table class="table">
                        <tr>
                            <td class="td">Data rozpoczęcia</td><td class="td">	2021-10-05</td>
                        </tr>
                        <tr >
                        <td class="td">Data zakończenia</td><td class="td">  2021-10-09</td>
                        </tr>
                      </table>
                    </td>
                </tr>
                <tr >
                    <td class="td" colspan="2">Linki</td>
                </tr>
                <tr >
                    <td class="td" ><a href="https://lolesports.com/">Strona lolesports.com</a></td>
                    <td class="tdimage">
                    <a href="https://twitter.com/lolesports"><img src="../img/app-icons-twitter.png" alt="Lolesports twitter" style="width:40px;height:40px;"></a></td>
                </tr>
            </table>
        </section>
    
        <article>
        <h2>Informacje o turnieju</h2>
        <span class="tekst">Mistrzostwa Świata League of Legends 2021 to trwający turniej e-sportowy dla wieloosobowej gry wideo League of Legends na arenie bitew online. Jest to jedenasta odsłona League of Legends World Championship, corocznego międzynarodowego turnieju organizowanego przez twórcę gry, firmę Riot Games. Turniej odbędzie się od 5 października do 6 listopada w Reykjaviku na Islandii. 
        </span> <p></p>
        <span class="tekst2">Dwadzieścia dwie drużyny z 11 regionów zakwalifikowały się do turnieju na podstawie ich pozycji w obwodach regionalnych, takich jak Chiny, Europa, Ameryka Północna, Korea Południowa i Tajwan/Hongkong/Makau/Azja Południowo-Wschodnia, przy czym dziesięć z tych drużyn musiało dotrzeć do głównego wydarzenie poprzez scenę wstępną.
        </span>
         </article>

        <article>
            <br>
            <h2>Format turnieju</h2>
            <p>Cztery najlepsze drużyny przechodzą do fazy grupowej turnieju Worlds 2021</p>

            <aside class="aside">
                <h4>Ciekawostka</h4> <p>Udział w wydarzeniu biorą aż 4 drużyny z regionu chin oraz korei.</p>
            </aside>

            <details >
            <summary>Szczegółowe informacje</summary>
                <ol class="list-padding">
                    <li>Play-In Round 1
                        <ul>
                            <li>Ten teams are divided into two groups where they play a Single Round Robin format.</li>
                            <li>All matches are played in a Bo1.</li>
                            <li>2nd, 3rd and 4th teams in each group advance to Play-In: Round 2.</li>
                            <li><mark>Bottom team in each group is eliminated.</mark></li>
                            </ul>  
                    </li>
    
                    <li>Play-In Round 2
                        <ul>
                            <li> Six teams from Play-In: Round 1.</li>
                            <li> The 3rd and 4th placed teams in the same group of Round 1 face each other, winners compete against the 2nd placed team of the other group</li>
                            <li>All matches are played in a Bo5.</li>
                            <li> Two winners will advance to Group Stage.</li>
                            <li><mark>Four losers will be eliminated.</mark></li>
                        </ul>  
                    </li>
                </ol> 
            </details>
        </article>

        <section class="tabela_wynikow">
            <h2>Tabela wyników</h2>
            <table class="styled-table">
                <thead>
                    <tr class="tr">
                        <th class="th">Team</th>
                        <th class="th">Points</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tr">
                        <td class="td">DWG</td>
                        <td class="td">9200</td>
                    </tr>
                    <tr class="tr">
                        <td class="td">EDG</td> 
                        <td class="td">5150</td>
                    </tr>
                    <tr class="tr">
                        <td class="td">FPX</td>
                        <td class="td">4150</td>
                    </tr>
                    <tr class="tr">
                        <td class="td">FNC</td>
                        <td class="td">950</td>
                    </tr>
                    <tr class="tr">
                        <td class="td">RGE</td>
                        <td class="td"></td>
                    </tr>
                </tbody>
            </table>            
        </section>
        <sectiom>
            <button onclick="getlinkslength()">Pokaż liczbe linków</button>
            <p id="demo"></p>
            <button onclick="getAllLinks()">Raport linków na stronie</button>
            <div class="divraportlinkow" id="divraportlinkow">
                 <p id="demo2"></p>
            </div>

            <button onclick="getimageslength()">Pokaż liczbe zdjec</button>
            <p id="demo3"></p>
            <button onclick="getAllImages()">Raport zdjec na stronie</button>
            <div class="divraportzdjec" id="divraportzdjec">
                 <p id="demo4"></p>
            </div>
            
            <button onclick="getAnchorsLength()">Pokaż liczbe anchorow</button>
            <p id="demo5"></p>
            <button onclick="getAllAnchors()">Raport anchorow na stronie</button>
            <div class="divraportanchorow" id="divraportanchorow">
                 <p id="demo6"></p>
            </div>
            
        </sectiom>
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