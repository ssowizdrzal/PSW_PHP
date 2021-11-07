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
        $roles_count = isset($_POST['roles'])? count($_POST['roles']):0;
        $user_data = array();
        

        $user_data['user_name'] = $_POST['name'];
        $user_data['user_nick'] = $_POST['nick'];
        $user_data['user_email'] = $_POST['email'];
        $user_data['user_description'] = $_POST['description'];

        if($check_roles){
           
            $user_data['user_roles'] =  $_POST['roles'] ;
        }
        else{
             $user_data['user_roles'] = array(0 => "Undefinied",) ; 
        }
      
        $user_data['user_gender]'] = $_POST['genders'];
        $user_data['user_ranks]'] = $_POST['ranks'];

            // echo (  $user_data['user_roles']);
        foreach($user_data as $user_key => $user_value) {
            if($user_key=='user_roles'){
                foreach($user_value as $user_role => $user_role_val) {

                }
            }
            elseif($user_key=='user_description'){
                $patterns = array();
                $patterns[0] = '/black/';
                $patterns[1] = '/[0-9]{2,3}/';
                $patterns[1] = '/(\.[_a-z0-9-]+)/';
                
                $replacements = array();
                $replacements[0] = 'africanamerican';
                $replacements[1] = '0X';
                $replacements[3] = 'beka';
                echoKeyValue($user_key,preg_replace($patterns, $replacements, $user_value)); 
                 
            }
            elseif($user_key=='user_email'){
                echoKeyValue($user_key,$user_value);  
                $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{1,3})$/'; 
                if (preg_match($regex, $user_value)) {
                    echo "$user_value  is  valid email
                    "; echo "<br>";
                }    
                else {
                    echo "$user_value  is not valid email
                    "; echo "<br>";
                }   
            }
            else{
                echoKeyValue($user_key,$user_value);     
            }
          }
        $skips =array_fill(0, 10, boolval(0) );
        echo("<ul> User roles ($roles_count):");
        foreach(array_values($user_data['user_roles']) as $value){
                echo("<li> (\u{1F418}\120\110\120\xc2\xa0($value)\u{50}\u{48}\u{50}\u{1F418}</li>");
                if($value=="Top") {$skips[0]=True;}
                elseif($value=="Jungle"){$skips[1]=True;}
                elseif($value=="Mid"){$skips[2]=True;}
                elseif($value=="Bot"){$skips[3]=True;}
                elseif($value=="Supp"){$skips[4]=True;}
            }
        echo("</ul>");
        echo("<ul>The rest Roles:");
        $all_roles= array("Top", "Jungle", "Mid", "Bot", "Supp");
        $reset = (bool)true;

        current($all_roles);
        foreach($skips as $id => $doSkip){
            $real_id=($id % 5);
            $key_var = key($all_roles);
            if(($id>=count($all_roles)) and ($key_var=count($all_roles))  and ($reset)){reset($all_roles);echo("</ul>\n\n<ul> All roles");$reset=!$reset;}
            if($doSkip){
                next($all_roles);
            }
            else{
               
                echo("<li> $all_roles[$real_id] </li>");
            }
            } ;  
        echo("</ul>");
    ?>
</body>
</html>