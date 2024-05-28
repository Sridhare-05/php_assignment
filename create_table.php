<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_commerce";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE OurProduct (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
productname VARCHAR(30) NOT NULL,
price INT(30) NOT NULL,
description VARCHAR(50),
producttype VARCHAR(30),
location VARCHAR(50)
)";

if (mysqli_query($conn, $sql)) {
  echo "Table MyProduct created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>