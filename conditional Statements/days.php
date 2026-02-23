<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $month = "Jan";
        switch($month){
            case "Jan":
                    echo "In Jan We have  Days :  31";
                    break;
            case "Feb":
                    echo "Days : 29";
                    break;
            case "March":
                    echo "Days : 31";
                    break;
            default :
            echo " Invalid";
        }
    ?>
    
</body>
</html>