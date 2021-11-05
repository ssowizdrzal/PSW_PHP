

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
   
      <p>Hi <?php print( $_POST["name"] ); ?>, Dzieki za wypelnienie ankiety</p>
      <p class = "head">Te dane zostały zapisane o tobie:</p>
      <p>Name: <?php print( $_POST["name"] ); 
         print( $_POST["surname"] ); ?></p>
      <p>Email: <?php print( $_POST["month"] ); ?></p>
      <p>Phone: <?php print( $_POST["email"] ); ?></p>
      <?php
         $lista_zajetych_emaili = array('dhominico@gmail.com', 'asd@gmail.com', 'jp100@op.pl');
         $znaleziono = 0;
         foreach  ($lista_zajetych_emaili as &$emailtemp){
            if(strcmp($_POST["email"], $emailtemp)==0){
               $znaleziono++;
            }
         }
         if($znaleziono==0){
            echo 'Email poprawny. <br />';
         }else{
            echo 'Email na czarnej liscie!!<br />';
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
             echo 'Już jutro twoje samopoczucie wyniosłoby: ';
             echo $samopoczucie +1;
             echo '! <br />';
             echo 'A nie pracując u nas w niedługim czasie wyniesie: '.$samopoczucie/2 .'! <br />';
             echo 'Decydując sie na niepracowanie u nas już jutro twoje samopoczucie wyniosłoby: ';
             echo $samopoczucie -1;
             echo '! <br />';
         }else {
            echo 'Twoje samopoczucie pracując u nas wynosiłoby: 9! <br />';
         }
      ?>
      <p>Phone: <?php print( $_POST["phone"] ); ?></p>
      <p class = "head">Naura.</p>   

      <?php
         echo 'Dla sprawdzenia powtórze twoje imie 3 razy. <br />';
         for ($i = 0; $i < 3; $i++) {
            print( $_POST["name"] );    
         }
      ?>
   
   </body>
</html>
