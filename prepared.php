<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_commerce";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyProduct (productname, price, description) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $productname, $price, $description);

// set parameters and execute
$productname = "Asus";
$price = "34000";
$description = "It is a Foreign brand";
$stmt->execute();

$productname = "Karbon";
$price = "45000";
$description = "It is a Foreign brand";
$stmt->execute();

$productname = "Lenovo";
$price = "78000";
$description = "It is a Foreign brand";
$stmt->execute();


echo "New records created successfully";

$stmt->close();
$conn->close();
?>