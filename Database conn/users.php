<?php
include('./db.php');

// Fetch Data from the User Table

$sql = "select * from user";

$res = $conn->query($sql);
echo $res->num_rows;

if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo "id: " . $row["uid"] . " - Name: " . $row["userName"] . " " . $row["email"] . "Password : " . $row["password"] . "<br>";
    }
} else {
    echo " There is no data available";
}
?>