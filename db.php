<?php

$servername="localhost";
$username="root";
$password="";
$dbname="testing";
$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("$conn fail".$conn->connect_error);
}
else{
   // echo "connection successfull";
}







?>