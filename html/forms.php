<?php
require(realpath($_SERVER["DOCUMENT_ROOT"]).'\PSW_PHP\php\functions.php');


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "keywords" content = "web page, design,  
    HTML5, tutorial, league of legends, game, player,
     lol, join, our, team, form">
    <meta name="description" content="This website will help you reach us with your feedback. With form available here you can submit your interest in joining our community.
    Also you can donwload here rules of our community.">
    <title>Form</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/forms.css">
    <link rel="stylesheet" href="../css/csscss/form.css">
</head>
<body>
    <header class="header">
        <div class="header-content">
         <img src="../img/lol-icon.png" alt="lol logo"> 
         <h1>Forms</h1>
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
            <h3> Join our team!</h3>
            
            <form class="form-join-us" method = "post" action = "../php/form_personal.php">


                <div class="separated">
                     <label>Name</label>
                     <input name = "name" type = "text" size = "25" id="form_name">
                    
               </div>
             
                  <div class="separated">
                     <label>Nickname</label>
                     <input name = "nick" type = "text" size = "25" id="form_nickname">
                     
                  </div>
               
              
                  <div class="separated">
                     <label>E-mail</label>
                     <input name = "email" type = "text" size = "25" id="form_email">
                    
                  </div>
            

               
                  <div class="separated">
                     <label>Desc</label>
                     <textarea name = "description" id="form_desc"
                     rows = "4" cols = "36" maxlength="200">Enter your story here.</textarea>
                    
                  </div>
              
               <div class="separated">
                  <p>
                     <strong>What roles do you take in SR soloq game:</strong><br>
   
                     <label>Top
                        <input name = "roles[]" type = "checkbox"  id="form_role_top"
                           value = "Top"></label>
                     
                     <label>Jungle
                        <input name = "roles[]" type = "checkbox" id="form_role_jg"
                           value = "Jungle"></label>
                           
                     <label>Mid
                        <input name = "roles[]" type = "checkbox" id="form_role_mid"
                           value = "Mid"></label>
                           
                     <label>Bot
                     <input name = "roles[]" type = "checkbox" id="form_role_bot"
                        value = "Bot"></label>
                        
                     <label>Supp
                     <input name = "roles[]" type = "checkbox" id="form_role_supp"
                        value = "Supp"></label>
                     </p>
               </div>

               <div class="separated">
               <p>
                  <strong>Select your gender:</strong><br>

                  <label>Male
                     <input name = "genders" type = "radio" id="form_gender_male"
                        value = "male" checked></label>
                  <label>Female
                     <input name = "genders" type = "radio" id="form_gender_female"
                        value = "female"></label> 
                  <label>Other
                     <input name = "genders" type = "radio" id="form_gender_other"
                        value = "other"></label> 
               </p>
               </div>

               <div class="separated">
               <p>
                  <label>Select your current soloq rank: 

                     <select name = "ranks" id="form_rank">
                        <optgroup label="Iron">
                           <option >Iron IV</option>
                           <option >Iron II</option>
                           <option >Iron III</option>
                           <option >Iron I</option>
                        </optgroup>
                        <optgroup label="Bronze">
                           <option >Bronze IV</option>
                           <option >Bronze III</option>
                           <option >Bronze II</option>
                           <option >Bronze I</option>
                        </optgroup>
                        <optgroup label="Silver">
                           <option >Silver IV</option>
                           <option >Silver III</option>
                           <option >Silver II</option>
                           <option >Silver I</option>
                        </optgroup>
                        <optgroup label="Gold">
                           <option selected >Gold IV</option>
                           <option >Gold III</option>
                           <option >Gold II</option>
                           <option >Gold I</option>
                        </optgroup>
                        <optgroup label="Plat">
                           <option >Plat IV</option>
                           <option >Plat III</option>
                           <option >Plat II</option>
                           <option >Plat I</option>
                        </optgroup>
                        <optgroup label="Diamond">
                           <option >Diamond IV</option>
                           <option >Diamond III</option>
                           <option >Diamond II</option>
                           <option >Diamond I</option>
                        </optgroup>
      
                        <option >Master</option>
                        <option >Grand Master</option>
                        <option >Challenger</option>
                     </select>
                  </label>
               </p>
 
            </div>
               <div class="form-buttons">
                  <div class="separated">
                      <input type = "submit" value = "Submit" id="form_submit">
                      <input type = "reset" value = "Clear" id="form_clear">
                  </div>  
              
             </div>  
               <p id = "helpText"></p>
               <script src="../js/focusblur.js"></script>
            </form>
 
         </article>
         
       </section>
       <button type="submit" onclick="window.open('../Data/informationaboutrecrutation.txt')">Download data about recrutation</button>
       <a href="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" target="_blank" download> HTTP download</a>       
       <a href="ftp://lol.fandom.com/wiki/File:2021_Season_World_Championship_Rulebook.pdf" target="_blank" download> FTP Zasady gry na mistrzostwach świata</a>

      
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