<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <style>
        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add a New Product</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="productname">Product Name:</label>
            <input type="text" id="productname" name="productname" required>
            
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" min="0" step="0.01" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
            
            <label for="producttype">Product Type:</label>
            <select id="producttype" name="producttype" required>
                <option value="Electronics">Electronics</option>
                <option value="Clothing">Clothing</option>
                <option value="Books">Books</option>
                
            </select>
            
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>
            
            <input type="submit" value="Submit">
        </form>
    </div>

    <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "e_commerce";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $productname = $_POST['productname'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $producttype = $_POST['producttype'];
        $location = $_POST['location'];

        
        $sql = "INSERT INTO OurProduct (productname, price, description, producttype, location) VALUES ('$productname', '$price', '$description', '$producttype', '$location')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>New product added successfully.</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    
    $sql = "SELECT * FROM Ourproduct";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Products:</h2>";
        while ($row = $result->fetch_assoc()) {
            echo "<p><strong>Product Name:</strong> " . $row["productname"] . "<br>";
            echo "<strong>Price:</strong> " . $row["price"] . "<br>";
            echo "<strong>Description:</strong> " . $row["description"] . "<br>";
            echo "<strong>Product Type:</strong> " . $row["producttype"] . "<br>";
            echo "<strong>Location:</strong> " . $row["location"] . "</p>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</body>
</html>
