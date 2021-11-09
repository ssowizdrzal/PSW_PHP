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

