<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vendor Login - Event Management System</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .top-links {
            text-align: center;
            margin: 10px 0;
        }

        .top-links a {
            color: #2c3e50;
            text-decoration: none;
            font-size: 1rem;
            margin: 0 10px;
        }

        .top-links a:hover {
            text-decoration: underline;
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

        .top-links .chart-link {
            background-color: #2ecc71; /* Green */
        }

        .top-links .chart-link:hover {
            background-color: #27ae60;
        }

        .top-links .back-link {
            background-color: #e74c3c; /* Red */
        }

        .top-links .back-link:hover {
            background-color: #c0392b;
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

    <div class="top-links">
        <a href="#chart" class="chart-link">Chart</a>
        <a href="index.php" class="back-link">Back</a>
    </div>

    <div class="header">
        Event Management System
    </div>

    <div class="container">
        <h2>Vendor Login</h2>
        <form action="vendor_login_db.php" method="post">
            <div class="form-group">
                <label for="vendor_username">Username</label>
                <input type="text" id="vendor_username" name="username" required>
            </div>

            <div class="form-group">
                <label for="vendor_password">Password</label>
                <input type="password" id="vendor_password" name="password" required>
            </div>

            <div class="buttons">
                <button type="submit" class="login-btn">Login</button>
                <button type="button" class="cancel-btn" onclick="window.location.href='index.php';">Cancel</button>
            </div>
        </form>
    </div>

</body>
</html>
