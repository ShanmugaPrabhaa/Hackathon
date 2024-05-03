<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "2004";
$dbname = "budget_tracker";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phoneno = $_POST['phoneno'];
    $age = $_POST['age'];
    $pronouns = $_POST['pronouns'];

    // Prepare SQL statement to insert data into userprofile table
    $sql = "INSERT INTO userprofile (email, name, phoneno, age, pronouns)
            VALUES ('$email', '$name', '$phoneno', $age, '$pronouns')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
