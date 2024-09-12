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
    error_log("Connection failed: " . $conn->connect_error); // Log error
    die("Connection failed. Please try again later.");
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vendor_username = $_POST['username'];
    $vendor_password = $_POST['password'];

    // Prepare SQL statement
    $stmt = $conn->prepare("SELECT * FROM vendors WHERE username = ?");
    $stmt->bind_param("s", $vendor_username);

    // Execute and fetch results
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if login is successful
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($vendor_password, $user['password'])) {
            // Start session and redirect to the external URL
            $_SESSION['username'] = $vendor_username;
            header("Location: http://sraryan.co.in"); // Redirect to the external URL
            exit();
        } else {
            echo "<script>alert('Invalid username or password'); window.location.href='vendor_login.php';</script>";
        }
    } else {
        echo "<script>alert('Invalid username or password'); window.location.href='vendor_login.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
