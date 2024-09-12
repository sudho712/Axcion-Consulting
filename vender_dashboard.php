<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #2c3e50;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            padding: 15px;
            color: white;
            text-decoration: none;
            font-size: 1rem;
            margin: 5px 0;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #3498db;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            background-color: #2c3e50;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .header a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            margin-left: 15px;
            padding: 5px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .header a:hover {
            background-color: #3498db;
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

    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <a href="user_management.html">Manage Users</a>
        <a href="vendor_management.html">Manage Vendors</a>
        <a href="product_management.html">Manage Products</a>
        <a href="order_management.html">Manage Orders</a>
        <a href="reports.html">View Reports</a>
        <a href="settings.html">Settings</a>
    </div>

    <div class="main-content">
        <div class="header">
            Admin Dashboard
            <a href="logout.php">Logout</a>
        </div>

        <div class="section">
            <h2>Welcome, Admin</h2>
            <div class="card">
                <h3>Manage Users</h3>
                <a href="user_management.html">View All Users</a>
                <a href="add_user.html">Add New User</a>
            </div>
            <div class="card">
                <h3>Manage Vendors</h3>
                <a href="vendor_management.html">View All Vendors</a>
                <a href="add_vendor.html">Add New Vendor</a>
            </div>
            <div class="card">
                <h3>Manage Products</h3>
                <a href="product_management.html">View All Products</a>
                <a href="add_product.html">Add New Product</a>
            </div>
            <div class="card">
                <h3>Manage Orders</h3>
                <a href="order_management.html">View All Orders</a>
                <a href="order_status.html">Order Status</a>
            </div>
            <div class="card">
                <h3>Reports</h3>
                <a href="reports.html">View Sales Reports</a>
                <a href="reports.html">View User Activity</a>
            </div>
            <div class="card">
                <h3>Settings</h3>
                <a href="settings.html">Update Profile</a>
                <a href="settings.html">System Settings</a>
            </div>
        </div>
    </div>

</body>
</html>
