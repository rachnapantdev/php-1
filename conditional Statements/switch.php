<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            1 :  UP
                    a: Agra
                    b: Banaras
                    g :  Ghaziabad
                    l: Lucknow
            2 :  UK
                    n: Nainital
                    h: Haldwani
                    d: Dehradun
            3 :  MP
                b: Bhopal
                i : Indore
        */
    $state =2;
    switch($state){
        case 1:
                echo "Welcome to Uttar Pradesh";
                $city = "a";
                switch($city){
                    case 'a':
                         echo "Welcome to the Agra";
                         break;
                    case 'b':
                            echo "Welcome to the Banaras";
                            break;
                    default:
                            echo "Your city is not in the list";
                }
                    

                break;
        case 2:
                echo " Welcome To Uttarakhand";
                $city = "h";
                switch($city){
                    case 'h':
                        echo "Welcome to Haldwani";
                        break;
                    case 'n':
                        echo "Welcome to the Nainital";
                        break;
                    default : 
                        echo "Your City is not in the list";
                }
                break;
    }   
    ?>
</body>
</html>