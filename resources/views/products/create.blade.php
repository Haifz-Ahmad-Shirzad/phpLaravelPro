<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>

<body>
    <h1>Create New Product</h1>

    <form action="#" method="POST">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name">
        <br><br>

        <label for="category">Category:</label>
        <input type="text" id="category" name="category">
        <br><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01">
        <br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        <br><br>

        <button type="submit">Create Product</button>
    </form>

    <br>
    <a href="{{ route('products.index') }}">Back to Products</a>
</body>

</html>