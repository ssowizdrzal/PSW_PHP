<!--Modal-->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <form class="login-form">
            <label >Login: <label><br>
            <input type="text" id="us_login" name="us_login" placeholder="login"><br>
            <label >Password: <label><br>
            <input type="password" id="us_pass" name="us_pass" placeholder="password"><br>
            <input type="button" value="Submit" name="but_submit" id="but_submit" />
            <div id="message"></div>
        </form>
    </div>

    </div>

    <script>
    // Get the modal
    var modal = document.getElementById("myModal");
    console.log(modal);
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    console.log(btn);
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    console.log(span);
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
    modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
    modal.style.display = "none";
    }
    }
    </script>

    <script src="jquery-3.2.1.min.js" type="text/javascript"></script>

    <script type="text/javascript">
    $(document).ready(function(){

        $("#but_submit").click(function(){
            var username = $("#us_login").val().trim();
            var password = $("#us_pass").val().trim();

            if( username != "" && password != "" ){
                console.log(username);
                console.log(password);
                $.ajax({
                    url:'./php/check_user_login.php',
                    type:'post',
                    data:{username:username,password:password},
                    success:function(response){
                        var msg = "";
                        if(response == 1){
                            window.location = "index.php";

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

</div>
<!-- end of Modal-->