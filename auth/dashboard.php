<?php
$userName = $_POST["userName"];
$password = $_POST["password"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($userName == "admin@gmail.com" && $password == "123") {
    ?>
        <h1> WElcome to the DAshboard </h1>
    <?php
    } else {
    ?>
        <h1> Invalid User Name or Password </h1>
    <?php
    }
    ?>
</body>
</html>