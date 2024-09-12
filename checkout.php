<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Checkout</title>
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
            position: relative;
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
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .item-details {
            margin-bottom: 20px;
        }

        .item-details p {
            margin: 5px 0;
        }

        form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 1rem;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group select {
            height: 40px;
        }

        .order-btn {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            text-align: center;
            display: block;
            width: 100%;
            margin-top: 20px;
        }

        .order-btn:hover {
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
        <h2>Checkout</h2>

        <div class="item-details">
            <h3>Item Details</h3>
            <p><strong>Item Name:</strong> Example Product</p>
            <p><strong>Price:</strong> $50.00</p>
            <p><strong>Quantity:</strong> 2</p>
            <p><strong>Total Price:</strong> $100.00</p>
        </div>

        <form action="process_order.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="number">Phone Number</label>
                <input type="text" id="number" name="number" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="state">State</label>
                <input type="text" id="state" name="state" required>
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" required>
            </div>

            <div class="form-group">
                <label for="pincode">Pincode</label>
                <input type="text" id="pincode" name="pincode" required>
            </div>

            <div class="form-group">
                <label for="payment_method">Payment Method</label>
                <select id="payment_method" name="payment_method" required>
                    <option value="credit_card">Credit Card</option>
                    <option value="debit_card">Debit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="cash_on_delivery">Cash on Delivery</option>
                </select>
            </div>

            <button type="submit" class="order-btn">Order Now</button>
        </form>
    </div>

</body>
</html>
