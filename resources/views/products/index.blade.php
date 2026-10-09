<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>

<body>
    <h1>Products</h1>

    <a href="{{ route('products.create') }}">Create New Product</a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Sample Product</td>
                <td>General</td>
                <td>100</td>
                <td>
                    <a href="{{ route('products.show', 1) }}">View</a>
                    <a href="{{ route('products.edit', 1) }}">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>