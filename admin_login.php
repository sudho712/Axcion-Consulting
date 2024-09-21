<?php
session_start(); // Start a new session or resume the existing one

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login - Event Management System</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .form-group label {
            width: 30%;
            font-size: 1rem;
            margin-bottom: 0;
            color: #555;
        }

        .form-group input {
            width: 70%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
        }

        button {
            padding: 10px;
            width: 48%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        .login-btn {
            background-color: #3498db;
            color: white;
        }

        .login-btn:hover {
            background-color: #2980b9;
        }

        .cancel-btn {
            background-color: #e74c3c;
            color: white;
        }

        .cancel-btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

    <div class="header">
        Event Management System - Admin Login
    </div>

    <div class="container">
        <h2>Admin Login</h2>
        <form action="admin_login_db.php" method="post">
            <div class="form-group">
                <label for="admin_username">Username</label>
                <input type="text" id="admin_username" name="username" required>
            </div>

            <div class="form-group">
                <label for="admin_password">Password</label>
                <input type="password" id="admin_password" name="password" required>
            </div>

            <div class="buttons">
                <button type="submit" class="login-btn">Login</button>
                <button type="button" class="cancel-btn" onclick="window.location.href='index.php';">Cancel</button>
            </div>
        </form>
    </div>

</body>
</html>
  
