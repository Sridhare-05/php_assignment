<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_commerce";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, productname, price FROM MyProduct";
$result = mysqli_query($conn, $sql);
echo "Select statement output: "."<br><br>";
if (mysqli_num_rows($result) > 0) {
  
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - ProductName: " . $row["productname"]. " Price: " . $row["price"]. "<br>";
  }
} else {
  echo "0 results";
}

$sql = "SELECT id, productname, price FROM MyProduct WHERE price=19900";
$result = $conn->query($sql);
echo "<br><br>";
echo "Where Condition output : "."<br>";
if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo "<br>";
    echo "id: " . $row["id"]. " - ProductName: " . $row["productname"]. " Price: " . $row["price"]. "<br>";
  }
} else {
  echo "0 results";
}

$sql = "SELECT id, productname, price FROM MyProduct ORDER BY price DESC"; //ASC/DESC (Default is ASC)
$result = $conn->query($sql);
echo "<br><br>";
echo "ORDER BY Condition output : "."<br>";
if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo "<br>";
    echo "id: " . $row["id"]. " - ProductName: " . $row["productname"]. " Price: " . $row["price"]. "<br>";
  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>