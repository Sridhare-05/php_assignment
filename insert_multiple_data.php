<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_commerce";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyProduct (productname, price, description, producttype, location)
VALUES ('Nokia', 19900, 'It is a Next Genlevel Smart phone', 'Mobile', 'Chennai');";

$sql .= "INSERT INTO OurProduct (productname, price, description, producttype, location)
VALUES ('Blueberry', 100000, 'It is a Current Genlevel Smart phone', 'Mobile', 'Bengalore');";

$sql .= "INSERT INTO OurProduct (productname, price, description, producttype, location)
VALUES ('Jio', 90000, 'It is a Past Genlevel Smart phone', 'Mobile', 'Mumbai')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>