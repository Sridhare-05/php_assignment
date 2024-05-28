<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_commerce";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Delete data

$sql = "DELETE FROM MyProduct WHERE id=3";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully"."<br><br>";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  // To update data

 echo "Updated Data: "."<br><br>"; 
$sql = "UPDATE MyProduct SET price= '67000' WHERE id=6";
$result = $conn->query($sql);
$sql = "SELECT id, productname, price FROM MyProduct";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

    echo "id: " . $row["id"]. " - ProductName: " . $row["productname"]. " Price: " . $row["price"]. "<br>";
  } 
}else {
    echo "Error updating record: " . $conn->error;
  }



mysqli_close($conn);
?>