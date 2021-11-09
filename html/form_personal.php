<?php
require(realpath($_SERVER["DOCUMENT_ROOT"]).'\PSW_PHP\php\functions.php');
require(realpath($_SERVER["DOCUMENT_ROOT"]).'\\' . firstDir(dirname($_SERVER['PHP_SELF'])) . '\php\block_access.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "keywords" content = "web page, design,  
    HTML5, tutorial, league of legends, game, player,
     lol, join, our, team">
    <meta name="description" content="This website will help you reach us with your feedback. With form available here you can submit your personal information">
    <title>Form personal info</title>
    <script src="../js/kolekcje.js"></script>
    <link rel="stylesheet" href="../css/global.css">
    <!-- <link rel="stylesheet" href="../css/forms.css"> -->
    <!-- <link rel="stylesheet" href="../css/csscss/form.css"> -->
   </head>
<body>
    <header class="header">
        <div class="header-content">
         <img src="../img/lol-icon.png" alt="lol logo"> 
         <h1>Form personal info</h1>
         <?php include(realpath($_SERVER["DOCUMENT_ROOT"]).'\\' . firstDir(dirname($_SERVER['PHP_SELF'])) . '\php\navbar.php'); ?>

        </div>

        <hr class="global-hr">
        
        <nav class="interior-nav">
         <ul>
             <li><a href="./forms.php">Form Main</a></li>
             <li><a href="./form_personal.php">Personal</a></li>
             <li><a href="./form_personal_details.php">Personal Details</a></li>
         </ul>
     </nav>

    </header>
    <main>
       <section>
         <h2>Forms</h2>
         <article>
            <h3>  Personal form!</h3>
            
            <form class="form-personal" method = "post" action = "../php/form_details.php" autocomplete="on">
      
               <input type = "hidden" name = "recipient"
                  value = "#">
               <input type = "hidden" name = "subject" 
                  value = "Personal Form">
               <input type = "hidden" name = "redirect" 
                  value = "#"> 

              
                  <div class="separated">
                     <label>Name</label>
                     <input name = "name" type = "text" size = "25" autofocus>
                    
                  </div>
             

              
                <div class="separated">
                   <label>Surname</label>
                   <input name = "surname" type = "text" size = "25" required>
                  
                </div>
         

             
                  <div class="separated">
                     <label>Month of birth</label>
                     <input list="months" name="month" id="month">
                     <datalist id="months">
                        <option value="January"> </option>
                        <option value="February"> </option>
                        <option value="March"> </option>
                        <option value="April"> </option>
                        <option value="May"> </option>
                        <option value="June"> </option>
                        <option value="July"> </option>
                        <option value="August"> </option>
                        <option value="September "></option>
                        <option value="October"> </option>
                        <option value="November"> </option>
                        <option value="December"></option>    
                    </datalist>
                     
                  </div>
              
                  <div class="separated-full">
                     <label>E-mail</label>
                     <input name = "email" type = "text" size = "25"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
                     <p class="format-inf">in the format name@domain.xyz</p>
                  </div>

                  <div class="separated-full">
                     <label>Swoje samopoczucie od 0 do 9</label>
                     <input name = "samopoczucie" type = "number" size = "1"  required/>
                  </div>

               
                  <div class="separated-full">
                     <label>Phone numb</label>
                     <input type="tel" id="phone" name="phone" size = "25" 
                     pattern="[0-9]{9}">
                     <p class="format-inf">in the format 123456789</p>
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
       <button onclick="getFormLength()">Liczba Formów</button>
       <p id="demo"></p>
       <button onclick="getAllForms()">Raport formów</button>
       <div class="divraportformow" id="divraportformow">
         <p id="demo2"></p>
    </div>
   </main>

   <footer class="footer">
      <p>Autor: Dominik Sandura, Sebastian Sowizdrzał</p>
      <a href="mailto:242405@student.pwr.edu.pl">242405@student.pwr.edu.pl</a> - <a href="mailto:242467@student.pwr.edu.pl">242467@student.pwr.edu.pl</a>
      <?php 
        if(!isset($_SESSION['uname']))
        include(realpath($_SERVER["DOCUMENT_ROOT"]).'\\' . firstDir(dirname($_SERVER['PHP_SELF'])) .'\php\login_modal.php'); ?>   
    </footer> 
    
</body>
</html>