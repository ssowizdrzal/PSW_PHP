<?php
   define("DZIEKI", 'Dzieki za wypelnienie formularza.');
   $string690 = 'Czesc, '. $_POST["name"];
?>

<!DOCTYPE html>

<html>
   <head>
      <meta charset = "utf-8">
      <title>Form Validation</title>
      <style type = "text/css">
         p       { margin: 0px; }
         .error  { color: red }
         p.head  { font-weight: bold; margin-top: 10px; }
      </style>
   </head>
   <body>
       <?php 
         $string0=$GLOBALS['string690'];
         $string0 = 'Czesc, '. $_POST["name"];
         $string0.= '.<br />';
         $string0.= DZIEKI;
         $string0.='<br />'; 
         echo $string0;
       ?>
      <p class = "head">Te dane zostały zapisane o tobie:</p>
      <p>Name: <?php print( $_POST["name"] . ' '); 
         print( $_POST["surname"] ); ?></p>
      <p>Miesiąc urodzin: <?php print( $_POST["month"] ); ?></p>
      <p>Email: <?php print( $_POST["email"] ); ?></p>
      <?php
         $czarna_lista_emaili = array('dhominico@gmail.com', 'asd@gmail.com', 'jp100@op.pl');
         $znaleziono = 0;
         foreach  ($czarna_lista_emaili as &$emailtemp){
            if(strcmp($_POST["email"], $emailtemp)==0){
               $znaleziono++;
            }
         }
         if($znaleziono==0){
            echo 'Email poprawny. <br />';
         }else{
            echo '<span style="color:#ff0000">Email na czarnej liscie!!</span><br />';
         }
      ?>
      <?php
         $samopoczucie = $_POST["samopoczucie"];
         echo 'Twoje aktualne samopoczucie: ';
         echo $samopoczucie;
         echo '<br />';

         if($samopoczucie==9){
            echo 'Twoje samopoczucie pracując u nas byłoby takie samo! <br />';
         }else if($samopoczucie<5 && $samopoczucie>0){
             echo 'Twoje samopoczucie pracując u nas wynosiłoby: '.$samopoczucie*2 .'! <br />';
             
             $nowesamopoczucie=$samopoczucie;
             $nowesamopoczucie+=1;
             $string1 = 'Już jutro twoje samopoczucie wyniosłoby: ' . $nowesamopoczucie;
             $string1 .='! <br />';  
             echo $string1;
             echo 'A nie pracując u nas w niedługim czasie wyniesie: '.$samopoczucie/2 .'! <br />';
             echo 'Decydując sie na niepracowanie u nas już jutro twoje samopoczucie wyniosłoby: ';
             echo $samopoczucie -1;
             echo '! <br />';
         }else if($samopoczucie>4&&$samopoczucie<10){
            $samopoczuciew = &$samopoczucie;
            $samopoczucie = 9;
            echo 'Twoje samopoczucie pracując u nas wynosiłoby: ';
            echo $samopoczuciew;
            echo '! <br />';
         }else{
            echo 'BŁEDNE DANE, USUWANIE DANYCH, LIKWIDACJA FORMULARZA, <span style="color:#ff0000"> AUTODESTRUKCJA</span><br /> ';
            die();
         

         }
      ?>
      <p>Numer telefonu: <?php print( $_POST["phone"] ); ?></p>
      <p class = "head">Naura.</p>   

      <?php
         echo 'Dla sprawdzenia powtórze twoje imie 3 razy. <br />';
         for ($i = 0; $i < 3; $i++) {
            print( $_POST["name"] );    
         }
         echo '<br />'
      ?>
         <?php
      //whether ip is from share internet
      if (!empty($_SERVER['HTTP_CLIENT_IP']))   
      {
         $ip_address = $_SERVER['HTTP_CLIENT_IP'];
      }
      //whether ip is from proxy
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
      {
         $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
      }
      //whether ip is from remote address
      else
      {
         $ip_address = $_SERVER['REMOTE_ADDR'];
      }
      echo 'Twoje ip: ' . $ip_address;
      ?>
   </body>
</html>
