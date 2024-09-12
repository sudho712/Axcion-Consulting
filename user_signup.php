<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Signup - Event Management System</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .nav-buttons {
            text-align: center;
            margin-bottom: 20px;
        }

        .nav-buttons a {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            font-size: 1rem;
            margin: 0 10px;
            transition: background-color 0.3s;
        }

        .chart-link {
            background-color: #3498db;
        }

        .chart-link:hover {
            background-color: #2980b9;
        }

        .back-link {
            background-color: #e74c3c;
        }

        .back-link:hover {
            background-color: #c0392b;
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
            max-width: 600px;
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

        .form-group-horizontal {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .form-group-horizontal label {
            width: 30%;
            font-size: 1rem;
            color: #555;
            margin-right: 10px;
        }

        .form-group-horizontal input {
            width: 70%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group-email-password {
            display: flex;
            flex-direction: column;
        }

        .form-group-email-password .form-group {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .form-group-email-password .form-group label {
            width: 30%;
            font-size: 1rem;
            color: #555;
            margin-right: 10px;
        }

        .form-group-email-password .form-group input {
            width: 70%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .buttons {
            text-align: center;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            background-color: #3498db;
            color: white;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div class="nav-buttons">
        <a href="#chart" class="chart-link">Chart</a>
        <a href="index.php" class="back-link">Back</a>
    </div>

    <div class="header">
        User Signup - Event Management System
    </div>

    <div class="container">
        <h2>Signup Form</h2>
        <form action="user_signup_process.php" method="post">
            <div class="form-group-horizontal">
                <label for="user_name">Name</label>
                <input type="text" id="user_name" name="name" required>
            </div>

            <div class="form-group-email-password">
                <div class="form-group">
                    <label for="user_email">Email</label>
                    <input type="email" id="user_email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="user_password">Password</label>
                    <input type="password" id="user_password" name="password" required>
                </div>
            </div>

            <div class="buttons">
                <button type="submit">Signup</button>
            </div>
        </form>
    </div>

</body>
</html>
