<?php
// Include the database credentials and establish connection
require_once 'credentials.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate the login (you'll need to implement this)
    // For example, check the email and password against the database
    // This is a simplified example and should be improved for security

    $query = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        // Login successful
        // Redirect the user after successful login
        header("Location: dashboard.php");
        exit;
    } else {
        // Login failed
        echo "Invalid email or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
