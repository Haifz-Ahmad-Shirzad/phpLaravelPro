<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>

<body>
    <h1>Update Product</h1>

    <form action="#" method="POST">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" value="Sample Product">
        <br><br>

        <label for="category">Category:</label>
        <input type="text" id="category" name="category" value="General">
        <br><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" value="100" step="0.01">
        <br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description">Sample product description.</textarea>
        <br><br>

        <button type="submit">Update Product</button>
    </form>

    <br>
    <a href="{{ route('products.index') }}">Back to Products</a>
</body>

</html>