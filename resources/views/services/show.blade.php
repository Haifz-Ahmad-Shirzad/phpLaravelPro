<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Details</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>

<body>
    <h1>Service Details</h1>

    <p><strong>ID:</strong> 1</p>
    <p><strong>Service Name:</strong> Money Transfer</p>
    <p><strong>Description:</strong> Domestic money transfer service.</p>
    <p><strong>Price:</strong> 100</p>
    <p><strong>Status:</strong> Active</p>

    <a href="{{ route('services.edit', 1) }}">Edit Service</a>
    <a href="{{ route('services.index') }}">Back to Services</a>
</body>

</html>