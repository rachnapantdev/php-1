<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page </title>
</head>
<body>
    <table width="100%" border="1">
        <thead>
                <tr>
                    <td>
                        <a href=""> Home </a>
                    </td>
                    <td>
                        <a href="/first-web/about.php"> About </a>
                    </td>
                    <td>
                        <a href="/first-web/services.php"> Services </a>
                    </td>

                </tr>
        </thead>

    </table>

    <?php 
        // Variable Initialize:

        $msg="This is our Home Page ";
    ?>

    <h1> <?php echo $msg; ?> </h1>
</body>
</html>