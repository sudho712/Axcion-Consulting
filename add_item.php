a!-- additem.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item - Vendor Dashboard</title>
    <style>
        /* Basic styles for the page (same as your previous design) */        
        body { background-color: #f4f4f4; 
            font-family: Arial, sans-serif;
             margin: 0; 
            padding: 0; 
        }
        .header 
        { background-color: #2c3e50;
             color: white; padding: 20px; text-align: center; 
             font-size: 1.5rem; }
        .container 
        { max-width: 1200px; 
            margin: 20px auto; 
            padding: 20px; b
            ackground-color: white; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            border-radius: 8px; }
        .form-group 
        { 
            margin-bottom: 20px; 
        }
        .form-group label
         { 
            display: block; 
            margin-bottom: 10px; }
        .form-group input 
        { 
            width: 100%; 
            padding: 10px;
             border: 1px solid #ddd; 
             border-radius: 5px; }
        button 
        { padding: 10px 20px; 
            background-color: #3498db;
             color: white; border: none; 
             border-radius: 5px; cursor: pointer;
         }
    </style>
</head>
<body>

    <div class="header">Add New Product</div>

    <div class="container">
        <form action="add_product_process.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" id="product_name" name="product_name" required>
            </div>

            <div class="form-group">
                <label for="product_price">Product Price</label>
                <input type="number" id="product_price" name="product_price" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="product_image">Product Image</label>
                <input type="file" id="product_image" name="product_image" accept="image/*" required>
            </div>

            <div class="form-group">
                <button type="submit">Add Product</button>
            </div>
        </form>
    </div>

</body>
</html>
