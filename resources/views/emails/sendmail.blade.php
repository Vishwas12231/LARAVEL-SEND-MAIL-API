<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $emailSubject }}</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Add your custom styles here */
        .cart-container {
            width: 80%;
            margin: auto;
            margin-top: 30px;
        }
        .cart-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .cart-body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .product {
            border-bottom: 1px solid #dee2e6;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <div class="cart-container">
        <div class="cart-header">
            <h2>{{ $emailSubject }}</h2>
        </div>
        <div class="cart-body">
            <div class="product">
                <p>{{ $emailMessage }}</p>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
