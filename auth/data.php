<?php
    $fullName=$_GET["fname"];
    $email = $_GET["email"];
    $phone=$_GET["phone"];
    $password = $_GET["password"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li> <?php echo $fullName;  ?> </li>
        <li> <?php echo $email;  ?> </li>
        <li> <?php echo $phone;  ?> </li>
        <li> <?php echo $password;  ?> </li>
    </ul>
</body>
</html>