<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="data.php" method="get">
        <div>
            <label for=""> Full Name</label>
            <input type="text" required name="fname">
        </div>
        <div>
            <label for=""> Email </label>
            <input type="email" required name="email">
        </div>
        <div>
            <label for=""> Phone </label>
            <input type="text" required name="phone">
        </div>
        <div>
            <label for=""> Password</label>
            <input type="password" required name="password">
        </div>
        <div>
           <input type="submit" value="Register">
        </div>
    </form>    

</body>
</html>