<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Order Status</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .top-nav {
            background-color: #2c3e50;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .top-nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            font-size: 1rem;
            border-radius: 5px;
            background-color: #3498db;
            transition: background-color 0.3s;
        }

        .top-nav a:hover {
            background-color: #2980b9;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .container h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .order-status-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .order-status-table th, .order-status-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        .order-status-table th {
            background-color: #3498db;
            color: white;
        }

        .order-status-table td {
            color: #555;
        }

        .status-btn {
            padding: 5px 10px;
            font-size: 0.9rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            transition: background-color 0.3s;
        }

        .view-btn {
            background-color: #27ae60;
        }

        .view-btn:hover {
            background-color: #1e8449;
        }

        .cancel-btn {
            background-color: #e74c3c;
        }

        .cancel-btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

    <div class="top-nav">
        <a href="home.html">Home</a>
        <a href="view_products.html">View Products</a>
        <a href="cart.html">Cart</a>
        <a href="logout.php" class="logout">Logout</a>
    </div>

    <div class="container">
        <h2>User Order Status</h2>

        <table class="order-status-table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1001</td>
                    <td>Product A</td>
                    <td>2</td>
                    <td>40.00</td>
                    <td>Shipped</td>
                    <td>
                        <button class="status-btn view-btn">View</button>
                        <button class="status-btn cancel-btn">Cancel</button>
                    </td>
                </tr>
                <tr>
                    <td>1002</td>
                    <td>Product B</td>
                    <td>1</td>
                    <td>20.00</td>
                    <td>Delivered</td>
                    <td>
                        <button class="status-btn view-btn">View</button>
                        <button class="status-btn cancel-btn">Cancel</button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

</body>
</html>
