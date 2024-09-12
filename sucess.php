<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order Success</title>
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
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        .container h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .container p {
            font-size: 1rem;
            color: #555;
            margin: 10px 0;
        }

        .container .order-details {
            margin-top: 20px;
        }

        .container .order-details p {
            font-weight: bold;
        }

        .button-group {
            margin-top: 20px;
        }

        .button-group a {
            display: inline-block;
            padding: 10px 20px;
            margin: 0 10px;
            font-size: 1rem;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            background-color: #3498db;
            transition: background-color 0.3s;
        }

        .button-group a:hover {
            background-color: #2980b9;
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
        <h2>Order Successfully Placed!</h2>
        <p>Thank you for your order. We have received your request and will process it soon.</p>
        <p>Your order number is: <strong>12345</strong></p>
        
        <div class="order-details">
            <p><strong>Item Name:</strong> Example Product</p>
            <p><strong>Price:</strong> $50.00</p>
            <p><strong>Quantity:</strong> 2</p>
            <p><strong>Total Price:</strong> $100.00</p>
        </div>

        <div class="button-group">
            <a href="home.html">Go to Home</a>
            <a href="view_products.html">Continue Shopping</a>
        </div>
    </div>

</body>
</html>
