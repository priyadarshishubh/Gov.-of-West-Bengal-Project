<?php

//create database connection
$server_name="localhost"; //assigining values in variable
$server_username="root";
$server_password="";
$database_name="iti";

$db_ref=mysqli_connect($server_name,$server_username,$server_password,$database_name) or die(mysqli_error($db_ref));
?>