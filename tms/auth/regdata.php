<?php
include('../config/db.php');

$fname = $_GET["fname"];
$email = $_GET["email"];
$password = $_GET["password"];

// insert inti user(userName, email, password ) values ('Abhishek Sharma', '','')
$sql = "insert into user (userName,email,password) values('" . $fname . "','" . $email . "','" . $password . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
