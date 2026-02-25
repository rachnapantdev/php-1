<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // indexed Array 
        $city = ["Delhi","Noida","Ghaziabad","Dehradun","Nainital"];
        // echo count($city); //Length of array 
        //     for($i=0; $i<count($city); $i++){
        //         ?>
        //         <p> Welcome to the <?php echo $city[$i]; ?>  </p>
        //         <?php
        //     }

            // foreach 
            foreach($city as $c)
                {
                   ?>
                <p> Welcome to the <?php echo $c; ?>  </p>
                <?php 
                }
    ?>
</body>
</html>