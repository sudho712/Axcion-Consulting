<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shopping Cart</title>
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

        .logout {
            background-color: #e74c3c;
        }

        .logout:hover {
            background-color: #c0392b;
        }

        .container {
            max-width: 1200px;
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

        .cart-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .cart-item img {
            width: 100px;
            height: auto;
            margin-right: 20px;
        }

        .cart-item-details {
            flex: 1;
        }

        .cart-item-details p {
            margin: 5px 0;
        }

        .cart-item-actions {
            display: flex;
            align-items: center;
        }

        .cart-item-actions button {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .remove-btn {
            background-color: #e74c3c;
            color: white;
        }

        .remove-btn:hover {
            background-color: #c0392b;
        }

        .total-section {
            text-align: right;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }

        .total-section p {
            font-size: 1.2rem;
            margin: 10px 0;
        }

        .proceed-btn {
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
            margin-top: 10px;
        }

        .proceed-btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div class="top-nav">
        <a href="home.html">Home</a>
        <a href="view_products.html">View Products</a>
        <a href="request_items.html">Request Item</a>
        <a href="product_status.html">Product Status</a>
        <a href="logout.php" class="logout">Logout</a>
    </div>

    <div class="container">
        <h2>Shopping Cart</h2>

        <div class="cart-item">
            <img src="item1.jpg" alt="Product Image">
            <div class="cart-item-details">
                <p><strong>Product Name:</strong> Item 1</p>
                <p><strong>Price:</strong> $50.00</p>
                <p><strong>Quantity:</strong> 2</p>
                <p><strong>Total Price:</strong> $100.00</p>
            </div>
            <div class="cart-item-actions">
                <button class="remove-btn">Remove</button>
            </div>
        </div>

        <!-- Repeat cart-item divs as needed for more products -->

        <div class="total-section">
            <p><strong>Grand Total:</strong> $200.00</p>
            <button class="proceed-btn">Proceed to Checkout</button>
        </div>
    </div>

</body>
</html>
