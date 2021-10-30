<?php
session_start();

//create database connection
$server_name="localhost"; //assigining values in variable
$server_username="root";
$server_password="";
$database_name="iti";

$db_ref=mysqli_connect($server_name,$server_username,$server_password,$database_name) or die(mysqli_error($db_ref));

$id=$_SESSION['id'];

function getStudentName($num, $db_ref){
    $sql="SELECT `name` FROM `trainee` where `registration_number`='$num';";
    $resultx=mysqli_query($db_ref,$sql) or die(mysqli_error());
    $traineeDetails=mysqli_fetch_array($resultx);
    echo $traineeDetails[0];
}
function getTradeName($num, $db_ref){
    $sql="SELECT `trade_name` FROM `trade` where `trade_code`='$num';";
    $resultx=mysqli_query($db_ref,$sql) or die(mysqli_error());
    $tradeDetails=mysqli_fetch_array($resultx);
    echo $tradeDetails[0];
}
function getITIName($num, $db_ref){
    $sql="SELECT `ITI_name` FROM `iti` where `NCVT_MIS_code`='$num';";
    $resultx=mysqli_query($db_ref,$sql) or die(mysqli_error());
    $ITIDetails=mysqli_fetch_array($resultx);
    echo $ITIDetails[0];
}
function getStudentName2($num, $db_ref){
    $sql="SELECT `name` FROM `trainee` where `registration_number`='$num';";
    $resultx=mysqli_query($db_ref,$sql) or die(mysqli_error());
    $traineeDetails=mysqli_fetch_array($resultx);
    return $traineeDetails[0];
}
function getTradeName2($num, $db_ref){
    $sql="SELECT `trade_name` FROM `trade` where `trade_code`='$num';";
    $resultx=mysqli_query($db_ref,$sql) or die(mysqli_error());
    $tradeDetails=mysqli_fetch_array($resultx);
    return $tradeDetails[0];
}
function getITIName2($num, $db_ref){
    $sql="SELECT `ITI_name` FROM `iti` where `NCVT_MIS_code`='$num';";
    $resultx=mysqli_query($db_ref,$sql) or die(mysqli_error());
    $ITIDetails=mysqli_fetch_array($resultx);
    return $ITIDetails[0];
}
?>