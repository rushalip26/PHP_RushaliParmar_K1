<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
         Name:
        <input type="text" name="name" id="">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]==="POST")
$name=$_POST["name"];
$sql=$conn->prepare("delete from employees where name=?");
$sql->bind_param('s',$name);
if ($sql->execute()) {
    echo "Data Deleted";
}
?>