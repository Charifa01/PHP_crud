<?php
$server_name = "localhost";
$user_name = "root";
$Password = "";
$db_name ="crud";
$connect = mysqli_connect($server_name,$user_name,$Password,$db_name);
if(!$connect){
    die("cannot connect to database".myspli_connect_error());
}
