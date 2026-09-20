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
        Department:
        <input type="text" name="dept" id="">
        <br>
        Salary:
        <input type="number" name="salary" id="">
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>

<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $name=$_POST["name"];
    $dept=$_POST["dept"];
    $salary=$_POST["salary"];
    $sql=$conn->prepare("update employees set dept=?,salary=? where name=?");
    $sql->bind_param('sds',$dept,$salary,$name);
    if ($sql->execute()) {
        echo "Data Updated";
    }
}
?>