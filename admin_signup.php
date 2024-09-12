
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Signup - Event Management System</title>
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
            max-width: 600px; /* Adjusted width to accommodate horizontal layout */
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
            color: #555;
            margin-right: 10px; /* Space between label and input */
        }

        .form-group input, .form-group select {
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

    <div class="header">
        Admin Signup
    </div>

    <div class="container">
        <h2>Signup Form</h2>
        <form action="admin_signup_process.php" method="post">
            <div class="form-group">
                <label for="admin_name">Name</label>
                <input type="text" id="admin_name" name="name" required>
            </div>

            <div class="form-group">
                <label for="admin_email">Email</label>
                <input type="email" id="admin_email" name="email" required>
            </div>

            <div class="form-group">
                <label for="admin_password">Password</label>
                <input type="password" id="admin_password" name="password" required>
            </div>

            <div class="form-group">
                <label for="admin_category">Category</label>
                <select id="admin_category" name="category" required>
                    <option >select </option>
                    <option >Catering </option>
                    <option >Florist</option>
                    <option >Decoration </option>
                    <option >Decoration </option>
                </select>
            </div>

            <div class="buttons">
                <button type="submit">Signup</button>
            </div>
        </form>
    </div>

</body>
</html>
