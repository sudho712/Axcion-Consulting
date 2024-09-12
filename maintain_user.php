<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manage Users</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .top-bar {
            background-color: #2c3e50;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .top-bar a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            margin: 0 10px;
            padding: 5px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .top-bar a:hover {
            background-color: #3498db;
        }

        .main-content {
            padding: 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            color: #333;
        }

        .card {
            background-color: white;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            margin-top: 0;
            color: #333;
        }

        .card a {
            display: block;
            padding: 10px;
            color: #3498db;
            text-decoration: none;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .card a:hover {
            background-color: #ecf0f1;
        }
    </style>
</head>
<body>

    <div class="top-bar">
        <a href="index.html">Home</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="main-content">
        <div class="section">
            <h2>Manage Users</h2>
            <div class="card">
                <h3>Membership Management</h3>
                <a href="add_membership.html">Add Membership</a>
                <a href="delete_membership.html">Delete Membership</a>
            </div>
            <div class="card">
                <h3>User Management</h3>
                <a href="add_user.html">Add New User</a>
                <a href="update_user.html">Update User Details</a>
                <a href="delete_user.html">Delete User</a>
            </div>
        </div>
    </div>

</body>
</html>
