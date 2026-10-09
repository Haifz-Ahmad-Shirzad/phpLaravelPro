<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Service</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>

<body>
    <h1>Create New Service</h1>

    <form action="#" method="POST">
        <label for="name">Service Name:</label>
        <input type="text" id="name" name="name">

        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>

        <label for="price">Service Price:</label>
        <input type="number" id="price" name="price" step="0.01">

        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>

        <br>
        <button type="submit">Create Service</button>
    </form>

    <a href="{{ route('services.index') }}">Back to Services</a>
</body>

</html>