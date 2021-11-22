<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB DROP</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "admin";
        $password = "admin";
        $database = "LOLPORTAL";

        // Create connection to database
        $conn = new mysqli($servername, $username, $password, $database);
         
         if($conn->connect_errno ) {
            echo("Connect failed: %s<br />". $conn->connect_error);
            exit();
         }

         echo('Connected successfully.<br />');

         if ($conn->query("DROP DATABASE $database")) {
            echo("Database $database dropped successfully.<br />");
         }
         if ($conn->errno) {
            echo("Could not drop database: %s<br />". $conn->error);
         }
         $conn->close();
      ?>
</body>
</html>