<?php

    include('./db.php');

    // Create Table 

//  $sql =   'create table user(uid int primary key auto_increment, userName varchar(44), email varchar(33), password varchar(33))';


//  if ($conn->query($sql) === TRUE) {
//   echo "Table created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }


// insert data to the database

$sql ="insert into user (userName, email, password) value('Abhishek','abhishek@gmail.com','123')";


if ($conn->query($sql) === TRUE) {
  echo "Data Inserted successfully";
} else {
  echo "Error Inserting Data: " . $conn->error;
}
?>