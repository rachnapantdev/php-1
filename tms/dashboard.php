<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
            margin: auto;
        }

        th {
            background: #ccc;
        }

        tr {
            text-align: center;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        tr:nth-child(even) {
            background: #efefef;
        }

        tr:hover {
            background: #d1d1d1;
        }

        .myButton {
            background-color: #008CBA;

            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
            transition-duration: 0.4s;
        }

        .myButton:hover {
            background-color: #005684;
            /* Darker blue on hover */
        }
    </style>
</head>

<body>
    <a href="./addtodo.php" class="myButton" style="font-size: 16px; font-weight: bold;"> Add Task </a>
    <table class="my_table">
        <tr>
            <th>SN</th>
            <th>Task Name</th>
            <th>Action</th>

        </tr>

        <?php
        include('./config/db.php');

        $sql = "select * from todos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

        ?>
                <tr>
                    <td><?php  echo $row['id'] ; ?> </td>
                    <td><?php  echo $row['taskName'] ; ?></td>
                    <td><a href="./delete.php/?id=<?php echo $row['id']; ?>" class="myButton">Delete</a></td>

                </tr>
        <?php
                // echo "ID :" . $row['id'] . "<br> Task Name :" . $row['taskName'];
            

                }

        } else {
            echo "There is some error";
        }
        $conn->close();

        ?>





    </table>

</body>

</html>