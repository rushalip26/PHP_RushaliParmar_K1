<?php
$servername="localhost";
$username="root";
$pass="";
$dbname="php";
$conn=new mysqli($servername,$username,$pass,$dbname);
if(!$conn){
    echo "Not Connected";
}
else{
    echo "Connected";
}
?>