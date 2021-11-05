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
      <p class = "head">Te dane zostały zapisane o tobie ruro:</p>
      <p>Name: <?php print( $_POST["name"] ); 
         print( $_POST["surname"] ); ?></p>
      <p>Email: <?php print( $_POST["month"] ); ?></p>
      <p>Phone: <?php print( $_POST["email"] ); ?></p>
      <p>Phone: <?php print( $_POST["phone"] ); ?></p>
      <p class = "head">Naura.</p>   
   </body>
</html>
