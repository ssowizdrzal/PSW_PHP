<?php
require(realpath($_SERVER["DOCUMENT_ROOT"]).'\PSW_PHP\php\functions.php');
require(realpath($_SERVER["DOCUMENT_ROOT"]).'\\' . firstDir(dirname($_SERVER['PHP_SELF'])) . '\php\block_access.php');


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
    <title>Change personal settings</title>

      <!-- <meta> tags provide search engines with -->
      <!-- information used to catalog a site      -->
      <meta name = "keywords" content = " acount, submit, login, register, edit">
      <meta name = "description" content = "Change account settings ">
      
        <link rel="stylesheet" href="../css/global.css">
        <link rel="stylesheet" href="../css/csscss/news.css">
        <?php #include(realpath($_SERVER["DOCUMENT_ROOT"]).'\\' . firstDir(dirname($_SERVER['PHP_SELF'])) . '\php\preferencjeuzytkownika.php'); ?>

        <script src="../js/mouse_events_news.js"></script>
        <script src="../js/kolekcje.js"></script>

</head>
<body>
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
    <section>
         <article>
            <h3>Zmień dane konta!! </h3>
            
            <form class="form-personal">
                <?php
              
                    $servername = "localhost";
                    $username = "admin";
                    $password = "admin";
                    $database = "LOLPORTAL";
                    $conn = new mysqli($servername, $username, $password, $database);
                    
                    if($conn->connect_errno ) {
                        echo("Connect to database failed");
                        exit();
                    }

                    $sql_query = "SELECT user_password,user_name,user_surname FROM Users WHERE user_login='".$_SESSION['uname']."'";
                    $result = mysqli_query($conn,$sql_query);
                    $row = mysqli_fetch_array($result);

                ?>


                 <input type = "hidden" name = "us_username" id="us_username"
                  value = ""> 
                    


                  <div class="separated">
                     <label>Password</label>
                     <input id = "us_pass2" name = "us_pass2"  type = "text" size = "25" autofocus value="<?php echo $row['user_password']   ?>">
                    
                  </div>
             
                 
                  <div class="separated">
                     <label>Name</label>
                     <input id = "us_name2" name = "us_name2" type = "text" size = "25" autofocus value="<?php echo $row['user_name']   ?>">
                    
                  </div>
             

              
                <div class="separated">
                   <label>Surname</label>
                   <input  id = "us_surname2" name = "us_surname2" type = "text" size = "25" required value="<?php echo $row['user_surname']   ?>">
                  
                </div>

               <div class="form-buttons">
                    <div class="separated">
                        <input type = "button" value = "Submit" name="but_submit3" id="but_submit3">
                    </div>  
                
               </div>   
               <div class="message" id="message">
            </form>
 
         </article>
       </section>
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

<script type="text/javascript">
    $(document).ready(function(){
    $("#but_submit3").click(function(){
        console.log ('<?php  echo firstDir(dirname($_SERVER['PHP_SELF']));?>');
        var username = $("#us_username").val().trim();
        var password = $("#us_pass2").val().trim();
        var name = $("#us_name2").val().trim();
        var surname = $("#us_surname2").val().trim();

        if(password != ""  && name != "" && surname != ""){
            console.log(username);
            console.log(password);
            console.log(name);
            console.log(surname);
            $.ajax({ 
                url: '/' + '<?php  echo firstDir(dirname($_SERVER['PHP_SELF']));?>' + '/php/register_user.php',
                type:'post',
                data:{username:username,password:password, name:name, surname:surname},
                success:function(response){
                    var msg = "";
                    if(response == 1){
                        location.reload();
                    }
                    else if(response==0){
                        msg = "Invalid username and password!";
                    }
                    else{
                        msg = response;
                    }
                    $("#message").html(msg);
                }
            });
        }else{
            $("#message").html("Nie podales danych ");
        }
    });
});
</script>
