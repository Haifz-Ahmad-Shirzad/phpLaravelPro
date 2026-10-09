<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post Details</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>

<body>
    <h1>Blog Post Details</h1>

    <p><strong>ID:</strong> 1</p>
    <p><strong>Title:</strong> Introduction to Sarafi</p>
    <p><strong>Author:</strong> Admin</p>
    <p><strong>Category:</strong> News</p>
    <p><strong>Status:</strong> Published</p>
    <p><strong>Content:</strong> Welcome to the Sarafi platform. This article introduces our services and features.</p>

    <a href="{{ route('blog.edit', 1) }}">Edit Post</a>
    <a href="{{ route('blog.index') }}">Back to Blog Posts</a>
</body>

</html>