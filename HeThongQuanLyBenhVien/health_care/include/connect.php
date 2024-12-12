<?php
ini_set("display_errors",1);
$servername="localhost:3306";
$username="root";
$password="";
$dbname="hsm";
//khoi tao ket noi
$con = new mysqli($servername, $username,$password,$dbname);
//kiem tra ket noi
if($con->connect_error){
    die("ket noi that bai" .$con->connect_error);
}

?>
