<?php
include('../config/db.php');

$email = $_GET["email"];
$password = $_GET["password"];



$sql = "select email, password from user where email= '".$email."' and password='".$password."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
        if($email== $row['email'] && $password == $row['password']){
            header("Location: ../dashboard.php");
        }
  }
} 
    else {
  echo "Invalid User Name or Password";
}
$conn->close();
?>
