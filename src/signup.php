<?php

//aqui se llama la conexion $conn el cual se encuentra en databasephp
    include('../config/database.php'); //se le pone .. porque esta fuera de crs  es como un cd

    $fname = $_POST['f_name']; //VARIABLE = METODO ['NOMBRES NAME DEL HTML']
    $lname = $_POST['l_name'];
    $email = $_POST['e_mail'];
    $passwd = $_POST['passw'];

    $enc_pass = md5($passwd);

    //creamos otro sql que nos permita validar si el email existe
    $sql_email_exist = "
    SELECT COUNT (email) as total 
    FROM users 
    WHERE email ='$email' 
    LIMIT 1";
    $res = pg_query($conn, $sql_email_exist);

    if ($res){
        $row = pg_fetch_assoc($res);
        if ($row['total'] > 0){
            echo "Email already exist";
        }
        else {
            $sql ="INSERT INTO users (firstname, lastname, email, password)
        VALUES('$fname', '$lname', '$email', '$enc_pass')
        ";

            $res = pg_query($conn, $sql);

            if($res){
                echo  "User has been created succesfully";
            }
            else {
                echo  "Error";
            }
        }
    }



    //datos de values van en comilla sencilla y tienen que ser los mismos de arriba 
    
//para ejectuar va el $res=pg_query(); dentro del query van la coneccion
//el pg query es como un f5 el cual corre el esq con $conn
   

?>