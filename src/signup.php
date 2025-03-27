<?php

//aqui se llama la conexion $conn el cual se encuentra en databasephp
    include('../config/database.php') //se le pone .. porque esta fuera de crs  es como un cd

    $fname = $_POST['f_name']; //VARIABLE = METODO ['NOMBRES NAME DEL HTML']
    $lname = $_POST['l_name'];
    $email = $_POST['e_mail'];
    $passwd = $_POST['passw'];
    
    //datos de values van en comilla sencilla y tienen que ser los mismos de arriba 
    $sql ="INSERT INTO users (firstname, lastname, email, pasword)
        VALUES('$fname', '$lname', '$email', '$passwd') 

    ";
51buº
?>