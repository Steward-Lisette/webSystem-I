<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WebsiteSystem";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

// Check if the email already exists
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>alert('Email already registered!'); window.location.href='../html/register.html';</script>";
} else {
    // Insert into the database
    $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful!'); window.location.href='../html/login.html';</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.location.href='../html/register.html';</script>";
    }
}

$conn->close();
?>
