<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Services</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>

<body>
    <h1>All Services</h1>

    <a href="{{ route('services.create') }}">Create New Service</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Service Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Money Transfer</td>
                <td>Domestic money transfer service</td>
                <td>100</td>
                <td>Active</td>
                <td>
                    <a href="{{ route('services.show', 1) }}">View</a>
                    <a href="{{ route('services.edit', 1) }}">Edit</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Currency Exchange</td>
                <td>Currency exchange service</td>
                <td>50</td>
                <td>Active</td>
                <td>
                    <a href="{{ route('services.show', 2) }}">View</a>
                    <a href="{{ route('services.edit', 2) }}">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>