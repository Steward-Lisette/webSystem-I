<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WebsiteSystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "<script>alert('Login successful!'); window.location.href='../html/main.html';</script>";
    } else {
        echo "<script>alert('Invalid password!'); window.location.href='../html/login.html';</script>";
    }
} else {
    echo "<script>alert('Invalid email!'); window.location.href='../html/login.html';</script>";
}

$conn->close();
?>
