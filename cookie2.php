<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    
    // Set a cookie to remember the username
    setcookie("username", $username, time()+3, "/"); // Expires in 3 sec
    setcookie("password", $password, time()+3, "/"); // Expires in 3 sec
    setcookie("email", $email, time()+3, "/"); // Expires in 3 sec
}

// Check if the username cookie exists
if (isset($_COOKIE["username"]) && isset($_COOKIE["password"]) && isset($_COOKIE["email"])) {
    $remembered_username = $_COOKIE["username"];
    $remembered_password = $_COOKIE["password"];
    $remembered_email = $_COOKIE["email"];
} else {
    $remembered_username = "";
    $remembered_password = "";
    $remembered_email = "";
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Cookie</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($remembered_username); ?>"><br><br>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" value="<?php echo htmlspecialchars($remembered_password); ?>"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($remembered_email); ?>"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
