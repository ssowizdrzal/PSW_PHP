<?php
require(realpath($_SERVER["DOCUMENT_ROOT"]).'\PSW_PHP\php\functions.php');

session_start();
// Check user login or not
if(isset($_SESSION['uname'])){
   echo $_SESSION['uname'];
}
else{
    echo "no user" ;
}

// if(empty($fontColor)){
//   $fontColor = "3f3f3f";
// }
// if(empty($fontStyle)){
//   $fontStyle = "Times New Roman";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "keywords" content = "web page, design,  
    HTML5, tutorial, league of legends, game, player,
     lol, league, best, reddit, play in">
    <meta name="description" content="This website will help you reach us with your feedback. With form available here you can submit your more detailed personal information">
    <title>Form personal details</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/forms.css">
    <link rel="stylesheet" href="../css/csscss/form.css">
</head>
<body class="body-form-personal">
    <header class="header">
        <div class="header-content">
         <img src="../img/lol-icon.png" alt="lol logo"> 
         <h1>Form personal details</h1>
         <?php include(realpath($_SERVER["DOCUMENT_ROOT"]).'\\' . firstDir(dirname($_SERVER['PHP_SELF'])) . '\php\navbar.php'); ?>

        </div>

        <hr class="global-hr">
        
        <nav class="interior-nav">
         <ul>
             <li><a href="./forms.html">Form Main</a></li>
             <li><a href="./form_personal.html">Personal</a></li>
             <li><a href="./form_personal_details.html">Personal Details</a></li>
         </ul>
     </nav>

    </header>
    <main>
       <section>
         <h2>Forms</h2>
         <article>
            <h3>Personal details form!</h3>
            
            <form class="form-personal-details" method = "post" action = "#">
      
               <input type = "hidden" name = "recipient"
                  value = "#">
               <input type = "hidden" name = "subject" 
                  value = "Feedback Form">
               <input type = "hidden" name = "redirect" 
                  value = "#"> 
                
                  
             
                  <div class="separated">
                     <label>Your favorite color</label>
                     <input type="color" ><br><br>                    
                  </div>
              

      
                  <div class="separated">
                     <label>Enter your birthday</label>
                     <input type="month" id="bdaymonth" name="bdaymonth">
                     
                  </div>
  
                  <div class="separated">
                     <label>How much do you play league</label>
                     <input type="range" value="6" min="0" max="12">
                    
                  </div>

                  <div class="separated">
                     <label>Link your best game ever</label>
                     <input type="url" id="homepage" placeholder="https://www.leagueoflegeds.com/games" name="homepage"><br><br>
                    
                  </div>

                  <div class="separated">
                     <label>Google search if you need help</label>
                     <input type="search" id="gsearch" placeholder="https://www.google.com" name="gsearch">
                    
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

   <footer class="footer">
      <p>Autor: Dominik Sandura, Sebastian Sowizdrzał</p>
      <a href="mailto:242405@student.pwr.edu.pl">242405@student.pwr.edu.pl</a> - <a href="mailto:242467@student.pwr.edu.pl">242467@student.pwr.edu.pl</a>
    </footer> 
    
</body>
</html>