<?php
// Database connection details
$servername = "localhost";
$username = ""; // your username 
$password = ""; // your password
$dbname = ""; //db name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $name = $conn->real_escape_string(trim($_POST['name']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $password = $conn->real_escape_string(trim($_POST['password']));
    $category = $conn->real_escape_string(trim($_POST['category']));

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO admin_users (name, email, password, category) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $hashed_password, $category);

    // Execute the statement and check if it was successful
    if ($stmt->execute()) {
        echo "<script>alert('Signup successful!'); window.location.href='admin_login.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='admin_signup.html';</script>";
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
