<?php
include "db.php";
$result=$conn->query("select * from employees");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table cellpadding="20" border="2">
        <tr>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>PHONE</td>
            <td>DEPARTMENT</td>
            <td>SALARY</td>
        </tr>
        <?php while ($row=$result->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["phone"] ?></td>
            <td><?php echo $row["dept"] ?></td>
            <td><?php echo $row["salary"] ?></td>
          </tr>  
        <?php } ?>
    </table>
</body>
</html>