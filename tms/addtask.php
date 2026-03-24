<?php

// create TABLE todos(id int PRIMARY KEY AUTO_INCREMENT, taskName varchar(33));


include('./config/db.php');

$task =  $_GET['taskName'];
echo $task;

$sql =  "insert into todos(taskName) values('" . $task . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: dashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
