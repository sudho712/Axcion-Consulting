<?php
session_start(); // Start a new session or resume the existing one

// Database connection details
$servername = "localhost";
$username = "onmxcqly_rightwayadmin";
$password = "PortfolioResponse123";
$dbname = "onmxcqly_rightwaydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_username = $_POST['username'];
    $admin_password = $_POST['password'];

    // Prepare SQL statement
    $stmt = $conn->prepare("SELECT * FROM admin_users WHERE username = ?");
    $stmt->bind_param("s", $admin_username);

    // Execute and fetch results
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Check if login is successful
    if ($user && password_verify($admin_password, $user['password'])) {
        // Start session and redirect to dashboard or another page
        $_SESSION['username'] = $admin_username;
        header("Location: dashboard.php"); // Redirect to the dashboard page
        exit();
    } else {
        echo "<script>alert('Invalid username or password'); window.location.href='index.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>