<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Name:
        <input type="text" name="name" id="">
        <br>
        Email:
        <input type="text" name="email" id="">
        <br>
        <select name="qual" id="">Qualification:
            <option value="MSC" >MSC</option>
            <option value="BSC">BSC</option>
            <option value="BE">BE</option>
        </select>
        <br>
        Gender:
        <input type="radio" name="gender" value="Male" id="">Male
        <input type="radio" name="gender" value="Female" id="">Female
        <input type="radio" name="gender" value="Other" id="">Other
        <br>
        Skills:
        <input type="checkbox" name="skills" value="Java" id="">Java
        <input type="checkbox" name="skills" value="Python" id="">Python
        <br>
        <select name="exp" id="">Experience(in years)
        <option value="1" name="exp">1</option>
        <option value="2" name="exp">2</option>
        <option value="3" name="exp">3+</option>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $name=$_POST["name"];
$email=$_POST["email"];
$qual=$_POST["qual"];
$gender=$_POST["gender"];
$skills=isset($_POST["skills"])?"Skilled":"Not Have any skills";
$exp=$_POST["exp"];

echo "My name is $name , My email is $email , my qualification is $qual ,my gender is $gender , i am $skills , my experience is $exp ";
}
?>