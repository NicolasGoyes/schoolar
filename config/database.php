<?php 
//create database config connection
$host ="aws-0-us-east-1.pooler.supabase.com"; //o la ip 127.0.0.1
$port ="6543"; //es el puerto de la base de datos 
$dbname ="postgres";
$user ="postgres.afhvxdizoormgkerlpna";
$password ="unicesmag@@"; //depende del caso
/*
$host ="localhost"; //o la ip 127.0.0.1
$port ="5432"; //es el puerto de la base de datos 
$dbname ="schoolar";
$user ="postgres";
$password ="unicesmag"; //depende del caso
*/
//create conection // se definen los parametros de cada uno 
//luego validamos la conexion de cada uno
$conn = pg_connect("

    host=$host
    port=$port
    dbname=$dbname
    user=$user
    password=$password

"
);
//validamos si la conexion no es satisfactoria entonces mandamos un error de lo contrario
//mandamos la conexion satisfactoria
if(!$conn){
    die("Connection Error: " . pg_last_error());
}else{
    echo "Success Connection";
}
   // pg_close();


?>