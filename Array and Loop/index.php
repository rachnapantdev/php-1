<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Loop work </h1>
    <?php
        // WAP to print numbers from 1-10
        $num =11; 
        while($num<=10){
            if($num%2==0)
                echo "<h1>".$num."</h1>";
            $num++;
        }


        $num2=121;
        do{
            echo "<h1>".$num2."</h1>";
            $num2++;
        }while($num2<=10);


        for($n=1; $n<=10; $n++){
                echo "<h1>".$n."</h1>";
 
        }
    ?>
</body>
</html>