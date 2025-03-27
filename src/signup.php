<?php

//aqui se llama la conexion $conn el cual se encuentra en databasephp
    include('../config/database.php'); //se le pone .. porque esta fuera de crs  es como un cd

    $fname = $_POST['f_name']; //VARIABLE = METODO ['NOMBRES NAME DEL HTML']
    $lname = $_POST['l_name'];
    $email = $_POST['e_mail'];
    $passwd = $_POST['passw'];
    
    //datos de values van en comilla sencilla y tienen que ser los mismos de arriba 
    $sql ="INSERT INTO users (firstname, lastname, email, password)
        VALUES('$fname', '$lname', '$email', '$passwd') 

    ";
//para ejectuar va el $res=pg_query(); dentro del query van la coneccion
//el pg query es como un f5 el cual corre el esq con $conn
    $res = pg_query($conn, $sql);

    if($res){
        echo  "User has been created succesfully";
    }
    else {
        echo  "Error";
    }

?>