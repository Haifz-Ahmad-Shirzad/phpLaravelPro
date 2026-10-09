<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>

<body>
    <h1>Update Service</h1>

    <form action="#" method="POST">
        <label for="name">Service Name:</label>
        <input type="text" id="name" name="name" value="Money Transfer">

        <label for="description">Description:</label>
        <textarea id="description" name="description">Domestic money transfer service.</textarea>

        <label for="price">Service Price:</label>
        <input type="number" id="price" name="price" value="100" step="0.01">

        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="active" selected>Active</option>
            <option value="inactive">Inactive</option>
        </select>

        <br>
        <button type="submit">Update Service</button>
    </form>

    <a href="{{ route('services.index') }}">Back to Services</a>
</body>

</html>