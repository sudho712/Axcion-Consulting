<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vendor Portal</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 1.5rem;
            position: relative;
        }

        .header h1 {
            margin: 0;
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
        }

        .dropdown-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .dropdown-container label {
            font-size: 1rem;
            margin-right: 10px;
            color: #555;
        }

        .dropdown-container select {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            width: 200px;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container a {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            font-size: 1rem;
            background-color: #3498db;
            transition: background-color 0.3s;
        }

        .button-container a:hover {
            background-color: #2980b9;
        }

        .logout-btn {
            background-color: #e74c3c;
        }

        .logout-btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

    <div class="header">
        Vendor Portal
    </div>

    <div class="container">
        <h2>Welcome, [Vendor Name]</h2>

        <div class="dropdown-container">
            <label for="category">Select Category:</label>
            <select id="category" name="category">
                <option value="catering">Catering</option>
                <option value="florist">Florist</option>
                <option value="decoration">Decoration Lighting</option>
                <option value="add">Add New Item</option>
            </select>
        </div>

        <div class="button-container">
            <a href="add_item.html">Add New Item</a>
            <a href="view_items.html">View Items</a>
            <a href="transactions.html">Transactions</a>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>

</body>
</html>
