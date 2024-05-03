<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to MySQL database
    $servername = "localhost"; // Change this if your MySQL server is on a different host
    $username = "root"; // Replace with your MySQL username
    $password = "2004"; // Replace with your MySQL password
    $dbname = "budget_tracker"; // Replace with your database name
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $email = $_POST['email'];
    $username = $_POST['username']; // Changed from 'name' to 'username'
    $phoneno = $_POST['phoneno'];
    $age = $_POST['age'];
    $pronouns = $_POST['pronouns'];
    $userpassword = $_POST['password']; // Changed variable name to match database column

    // Prepare SQL statement
    $sql = "INSERT INTO userprofile (email, username, phoneno, age, pronouns, userpassword) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssiis", $email, $username, $phoneno, $age, $pronouns, $userpassword); // Changed variable name here

    // Execute SQL statement
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
