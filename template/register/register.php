<?php
// Include the database connection file
include 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $phoneno = $_POST['phoneno'];
    $age = $_POST['age'];
    $pronouns = $_POST['pronouns'];

    // SQL query to insert data into userprofile table
    $sql = "INSERT INTO userprofile (email, name, password, phoneno, age, pronouns) 
            VALUES ('$email', '$name', '$password', '$phoneno', $age, '$pronouns')";

    // Execute query and check if insertion was successful
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
