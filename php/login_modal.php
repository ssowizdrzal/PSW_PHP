<!--Modal-->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="w3-bar w3-black">
            <button class="w3-bar-item w3-button" onclick="openTab('Login')">Login</button>
            <button class="w3-bar-item w3-button" onclick="openTab('Rejestracja')">Rejestracja</button>
        </div> 
        <div id="Login" class ="w3-container city">
            <span class="close1">&times;</span>
          
            <form class="login-form">

                <div class="separated">
                    <label>Login</label>
                    <input id = "us_login" name = "us_login" type = "text" size = "25"  placeholder="login"><br>
                </div>
                <div class="separated">
                    <label>Password</label><br>
                    <input id = "us_pass" name = "us_pass" type = "text" size = "25"  placeholder="password"><br>
                </div>
                <div class="form-buttons">
                        <div class="separated">
                            <input type = "button" value = "Submit" name="but_submit" id="but_submit"  >
                            <input type = "reset" value = "Clear">
                        </div>  
                </div> 
                <div id="message"></div>
            </form>
        </div>
        <div id="Rejestracja" class ="w3-container city" style="display:none">
            <span class="close2">&times;</span>
            
            <form class="form-personal" >
      
                  <div class="separated">
                     <label>Login</label>
                     <input id = "us_login2" name = "us_login2" type = "text" size = "25"  placeholder="login"><br>
                  </div>
                  <div class="separated">
                     <label>Password</label><br>
                     <input id = "us_pass2" name = "us_pass2" type = "text" size = "25"  placeholder="password"><br>
                  </div>
                  <div class="separated">
                     <label>Name</label><br>
                     <input  id = "us_name2" name = "us_name2"type = "text" size = "25"  placeholder="name"><br>
                  </div>
                <div class="separated">
                   <label>Surname</label><br>
                   <input  id = "us_surname2" name = "us_surname2"  type = "text" size = "25" placeholder="surname"><br>
                </div>
               <div class="form-buttons">
                    <div class="separated">
                        <input type = "button" value = "Submit" name="but_submit2" id="but_submit2"  >
                        <input type = "reset" value = "Clear">
                    </div>  
               </div>   
               <div id="message2"></div>
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
 
    var span1 = document.getElementsByClassName("close1")[0];

    var span2 = document.getElementsByClassName("close2")[0];

    btn.onclick = function() {
    modal.style.display = "block";
    }
    if(span1 != null)
    span1.onclick = function() {
    modal.style.display = "none";
    }
    if(span2 != null)
    span2.onclick = function() {
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

<script type="text/javascript">
$(document).ready(function(){
    $("#but_submit2").click(function(){
        console.log ('<?php  echo firstDir(dirname($_SERVER['PHP_SELF']));?>');
        var username = $("#us_login2").val().trim();
        var password = $("#us_pass2").val().trim();
        var name = $("#us_name2").val().trim();
        var surname = $("#us_surname2").val().trim();

        if( username != "" && password != ""  && name != "" && surname != ""){
            
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
                        openTab('Login');
                        $("#message").html("New account created, please login now");
                    }
                    else if(response==0){
                        msg = "Invalid username and password!";
                    }
                    else{
                        msg = response;
                    }
                    $("#message2").html(msg);
                }
            });
        }else{
            $("#message2").html(" Please Insert all data ");
        }
    });
});
</script>

