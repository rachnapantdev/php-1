<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Check if given number is divisble by 9 & 5  -->
     <?php
        $num = 345;
        if($num%5==0 && $num % 9==0){
            echo $num." is Divisble by 9 & 5";
        }
        else{
            echo "Not divisible";
        }
     ?>
    
</body>
</html>