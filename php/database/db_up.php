<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB UP</title>
</head>
<body>


    <?php
    $servername = "localhost";
    $username = "admin";
    $password = "admin";
    $database = "LOLPORTAL";
    $tablename = "Users";

    // Create connection to database
    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        //Check if error code =  (HY000/1049): Unknown database 'XYZ'
        if($conn->connect_errno==1049){
            // Create connection
            $conn = new mysqli($servername, $username, $password);
            // Create database
            $sql = "CREATE DATABASE $database";
            if ($conn->query($sql) === TRUE) {
                echo "Database created successfully" . "<br>";
            } else {
                die("Error creating database $database: " . $conn->error . "<br>");
            }

            $conn->select_db($database);
        }
        else{
            die("Connection to $database failed: " . $conn->connect_errno . "<br>");
        }
    }
    
    // CREATE TABLE IF NOT EXISTS
    
    $sql_create = 
        "CREATE TABLE IF NOT EXISTS $tablename(
        user_id INT AUTO_INCREMENT PRIMARY KEY,
        user_login VARCHAR(30) NOT NULL UNIQUE,
        user_password VARCHAR(30) NOT NULL,
        user_name VARCHAR(30) NOT NULL,
        user_surname VARCHAR(30) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

    if ($conn->query($sql_create) === TRUE) {
        echo "Table $tablename created successfully <br>";
    } else {
        die("Error creating table $tablename: " . $conn->error);
    }

    # INSERT

    $sql_insert = "INSERT INTO $tablename (user_login, user_password, user_name, user_surname)
        VALUES ('admin', 'admin', 'Dominik', 'Sebastian')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "New records created successfully <br>";
    } else {
        die( "Error: " . $sql_insert . "<br>" . $conn->error . "<br>");
    }

    $conn->close();
    ?>
</body>
</html>