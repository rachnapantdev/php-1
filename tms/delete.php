<?php
include('./config/db.php');


$id =  $_GET['id'];

// echo "ID is : " . $id;
$sql =  "delete from todos where id= ".$id;
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location:dashboard.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>