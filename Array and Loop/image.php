<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .imgC{
            height: 200px;
            width: 200px;
            margin: 5px;
        }

        .container{
            display: flex;
            flex-wrap: wrap;
        }
        .img{
            background-color: plum;
            height: 200px;
        }
    </style>
</head>

<body>
    <?php
    $imgArr = ["https://cdn.pixabay.com/photo/2016/03/27/21/57/art-1284427_1280.jpg", "https://cdn.pixabay.com/photo/2017/03/13/12/34/coffee-2139592_1280.jpg", "https://cdn.pixabay.com/photo/2015/04/06/16/21/korean-food-709606_1280.jpg", "https://cdn.pixabay.com/photo/2024/12/21/07/19/momos-9281469_1280.jpg", "https://cdn.pixabay.com/photo/2023/10/18/19/30/pastries-8324971_1280.jpg", "https://cdn.pixabay.com/photo/2021/03/04/19/35/tea-6069340_1280.jpg"];

    foreach($imgArr as $i){
        echo "<img src='".$i."' class='imgC'>";
    }

    ?>

    <div class="container">
        <?php
            foreach($imgArr as $i)
                {

              
        ?>
        <div class="imgs">
            <img src=<?php echo $i; ?> alt="" class="imgC">
        </div>

        <?php
         }
        ?>
    </div>
    
</body>

</html>