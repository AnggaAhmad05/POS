<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Care - POS Application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 20px;
        }
        .product-list {
            list-style: none;
            padding: 0;
        }
        .product-item {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .product-item:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Home Care Products</h1>
    </div>
    <div class="container">
        <h2>Available Products</h2>
        <ul class="product-list">
            <li class="product-item">All-Purpose Cleaner <span class="float-right">$10.00</span></li>
            <li class="product-item">Dish Soap <span class="float-right">$5.00</span></li>
            <li class="product-item">Laundry Detergent <span class="float-right">$15.00</span></li>
            <li class="product-item">Air Freshener <span class="float-right">$8.00</span></li>
        </ul>
    </div>
</body>
</html>