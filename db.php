<?php
$servername="localhost";
$username="root";
$pass="";
$dbname="employee_db";
$conn=new mysqli($servername,$username,$pass,$dbname);
if(!$conn){
    echo "Not Connected";
}
?>