<?php 
    include('../config/database.php');

    session_start();
    if(isset($_SESSION['user_id'])){
        header('Refresh: 0; URL=http://localhost/schoolar/src/home.php');
      

    }

    $email = $_POST['e_mail'];
    $passw = $_POST['p_sswd'];
    $enc_pass = md5($passw);

    $sql = "
    select 
	id,
	count(id) as total
    from users
    where email = '$email' and 
    password = '$enc_pass' and 
    status = true 
    GROUP BY 
    id;
";

$res = pg_query($conn,$sql);
    
    
   
    if($res){
        $row = pg_fetch_assoc($res);
        if ($row['total'] > 0){
            //echo "Login OK";
            $_SESSION['user_id'] = $row['id'];
            header('Refresh: 0; URL=http://localhost/schoolar/src/home.php');
        }
        else {
            echo "Login failed";
        }
    }
?>
 