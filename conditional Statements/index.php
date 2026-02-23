<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        avg>=90     A
        avg>=80     B
        avg>=70     C
        avg>=60     D
        else        Better Luck Next Time!!

    -->
        
    <?php
        $sname = "Aman";
        $h = 55;
        $e = 84;
        $m = 99;
        $s = 89;
        $c = 86;

        $total = $h + $e + $m + $s +$c;
        $avg = $total/5;
    if($avg>=1 && $avg<=100){
        $grade = "";
        if($avg >= 90){
            $grade = "A";
        }
        else if ($avg>=80){
            $grade = "B";
        }
        else if($avg>=70){
            $grade = "C";
        }
        else if($avg>=60){
            $grade = "D";
        }
        else{
            $grade = "Better Luck Next Time ";
        }


    ?>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th> Name </th>
                <th> Hindi </th>
                <th> English </th>
                <th> Math </th>
                <th> Science </th>
                <th> Computer </th>
                <th> Total </th>
                <th> Average </th>
                <th> Grade </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $sname; ?> </td>
                <td><?php echo $h; ?> </td>
                <td><?php echo $e; ?> </td>
                <td><?php echo $m; ?> </td>
                <td><?php echo $s; ?> </td>
                <td><?php echo $c; ?> </td>
                <td><?php echo $total; ?> </td>
                <td><?php echo $avg; ?> </td>
                <td><?php echo $grade; ?> </td>
            </tr>
        </tbody>
    </table>
<?php
}
    else{
        echo "Invalid Numbers";
    }      

?>
</body>
</html>