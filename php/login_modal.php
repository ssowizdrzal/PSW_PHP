<!--Modal-->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="w3-bar w3-black">
            <button class="w3-bar-item w3-button" onclick="openTab('Login')">Login</button>
            <button class="w3-bar-item w3-button" onclick="openTab('Rejestracja')">Rejestracja</button>
        </div> 
        <div id="Login" class ="w3-container city">
            <span class="close">&times;</span>
          
            <form class="login-form">
                <label >Login: <label><br>
                <input type="text" id="us_login" name="us_login" placeholder="login"><br>
                <label >Password: <label><br>
                <input type="password" id="us_pass" name="us_pass" placeholder="password"><br>
                <input type="button" value="Submit" name="but_submit" id="but_submit" />
                <a href="./html/rejestracja.php">Rejestracja</a> 
                <div id="message"></div>
            </form>
        </div>
        <div id="Rejestracja" class ="w3-container city" style="display:none">
            <span class="close">&times;</span>
            
            <form class="form-personal" method = "post" action = "../php/form_details.php" autocomplete="on">
      
               <input type = "hidden" name = "recipient"
                  value = "#">
               <input type = "hidden" name = "subject" 
                  value = "Personal Form">
               <input type = "hidden" name = "redirect" 
                  value = "#"> 
                  <div class="separated">
                     <label>Login</label>
                     <input name = "login" type = "text" size = "25" autofocus>
                  </div>
                  <div class="separated">
                     <label>Password</label>
                     <input name = "password" type = "text" size = "25" autofocus>
                  </div>
                  <div class="separated">
                     <label>Name</label>
                     <input name = "name" type = "text" size = "25" autofocus>
                  </div>
                <div class="separated">
                   <label>Surname</label>
                   <input name = "surname" type = "text" size = "25" required>
                </div>
               <div class="form-buttons">
                    <div class="separated">
                        <input type = "submit" value = "Submit">
                        <input type = "reset" value = "Clear">
                    </div>  
               </div>   
            </form>
        </div>
    </div>
    <!-- end of Modal content -->
</div>
<!-- end of Modal-->
<!--Modal scripts-->
 <script>

    var modal = document.getElementById("myModal");

    var btn = document.getElementById("myBtn");
 
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
    modal.style.display = "block";
    }

    span.onclick = function() {
    modal.style.display = "none";
    }

    window.onclick = function(event) {
    if (event.target == modal) {
    modal.style.display = "none";
    }
    }
</script>

<script>
function openTab(tabName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(tabName).style.display = "block";  
}
</script>

    <script type="text/javascript">
    $(document).ready(function(){

        $("#but_submit").click(function(){
            console.log ('<?php  echo firstDir(dirname($_SERVER['PHP_SELF']));?>');
            var username = $("#us_login").val().trim();
            var password = $("#us_pass").val().trim();

            if( username != "" && password != "" ){
                
                console.log(username);
                console.log(password);
                $.ajax({ 
                    url: '/' + '<?php  echo firstDir(dirname($_SERVER['PHP_SELF']));?>' + '/php/check_user_login.php',
                    type:'post',
                    data:{username:username,password:password},
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
            }
        });

    });

    </script>
<!--end of Modal scripts-->

