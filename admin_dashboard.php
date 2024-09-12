<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Library Management System</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #3b5998;
            padding: 20px;
            text-align: center;
            color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2rem;
            margin-top: 5px;
        }

        /* Navigation */
        nav {
            background-color: #34495e;
            display: flex;
            justify-content: space-between;
            padding: 15px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        nav .nav-left a, nav .nav-right a {
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            margin: 0 10px;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        nav .nav-left a:hover, nav .nav-right a:hover {
            background-color: #2c3e50;
        }

        nav .nav-right {
            margin-left: auto;
        }

        /* Main Container */
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 2rem;
        }

        /* Links Section */
        .links-section {
            padding: 20px;
            background-color: #34495e;
            margin-bottom: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); /* Responsive grid */
            gap: 15px; /* Increased space between items */
        }

        .links-section a {
            background-color: #2c3e50;
            padding: 15px;
            text-decoration: none;
            color: white;
            border-radius: 8px;
            display: block;
            text-align: center;
            font-size: 1rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .links-section a:hover {
            background-color: #1a252f;
            transform: scale(1.05);
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 15px 20px;
            background-color: #3b5998;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }

        footer p {
            font-size: 1rem;
            margin: 0;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>Library Management System</h1>
        <p>Welcome to the Library</p>
    </header>

    <!-- Navigation Section -->
    <nav>
        <!-- Left Navigation (Placeholder, Can be expanded later) -->
        <div class="nav-left">
            <a href="#home">Home</a>
        </div>

        <!-- Right Navigation (User and Admin Login) -->
        <div class="nav-right">
            <a href="project/user_login.php">User Login</a>
            <a href="project/vendor_login.php">Vendor Login</a>
            <a href="project/admin_login.php">Admin Login</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h2>Welcome to the Library Management System</h2>
        <p>Please use the navigation above to login as a user or admin.</p>
    </div>

    <!-- Additional Links Section -->
    <div class="links-section">
        <a href="project/register.php">User Signup</a>
        <a href="project/user_portal.php">User Portal</a>
        <a href="project/vendor_page.php">Vendor Page</a>
        <a href="project/product.php">Product</a>
        <a href="project/cart.php">Cart</a>
    </div>

    <div class="links-section">
        <a href="project/checkout.php">Checkout</a>
        <a href="project/success.php">Success</a>
        <a href="project/request_item.php">Request Item</a>
        <a href="project/product_status_update.php">Product Status Update</a>
        <a href="project/orders_status.php">Orders Status</a>
    </div>

    <div class="links-section">
        <a href="project/user_dashboard.php">User Dashboard</a>
        <a href="project/admin_dashboard.php">Admin Dashboard</a>
        <a href="https://sraryan.co.in/project/vender_dashboard.php">Vendor Dashboard</a>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Library Management System</p>
    </footer>

</body>
</html>
