<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>

<body>
    <h1>Product Details</h1>

    <p><strong>ID:</strong> 1</p>
    <p><strong>Product Name:</strong> Sample Product</p>
    <p><strong>Category:</strong> General</p>
    <p><strong>Price:</strong> 100</p>
    <p><strong>Description:</strong> Sample product description.</p>

    <a href="{{ route('products.edit', 1) }}">Edit Product</a>
    <br><br>
    <a href="{{ route('products.index') }}">Back to Products</a>
</body>

</html>