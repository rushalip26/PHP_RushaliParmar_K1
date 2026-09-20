<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Name:
        <input type="text" name="name" id="">
        <br>
        Age:
        <input type="number" name="age" id="">
        <br>
        Gender:
        <select name="gender" id="">
        <option name="gender" value="male">Male</option>
        <option name="gender" value="female">Female</option>
        <option name="gender" value="other">Other</option>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $name=$_POST["name"];
    $age=$_POST["age"];
    $gender=$_POST["gender"];
    echo "Hello, $name . You are $age years old and Identify as $gender .";
}
?>