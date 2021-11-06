<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1 Validation</title>
</head>
<body>
    <?php
        function echoKeyValue($key, $value) {
            echo "Key= $key  Value= $value";
            echo "<br>";
        };

        $check_roles = isset($_POST['roles']);
        $user_data = array();

        $user_data['user_name'] = $_POST['name'];
        $user_data['user_nick'] = $_POST['nick'];
        $user_data['user_email'] = $_POST['email'];
        $user_data['user_description'] = $_POST['description'];
        if($check_roles){
            echo($_POST['roles']);
           $user_data['user_roles'] =   implode(",",$_POST['product']); 
        }
      
        $user_data['user_gender]'] = $_POST['genders'];
        $user_data['user_ranks]'] = $_POST['ranks'];

            echo (  $user_data['user_roles']);
        foreach($user_data as $user_key => $user_value) {
            if($user_key=='user_roles'){
                foreach($user_value as $user_role => $user_role_val) {
                    echoKeyValue($user_role,$user_role_val);   
                }
            }
            else{
                echoKeyValue($user_key,$user_value);     
            }
          }
         
    ?>
</body>
</html>