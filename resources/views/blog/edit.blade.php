<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog Post</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>

<body>
    <h1>Update Blog Post</h1>

    <form action="#" method="POST">
        <label for="title">Post Title:</label>
        <input type="text" id="title" name="title" value="Introduction to Sarafi">

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" value="Admin">

        <label for="category">Category:</label>
        <select id="category" name="category">
            <option value="news" selected>News</option>
            <option value="finance">Finance</option>
            <option value="updates">Updates</option>
        </select>

        <label for="content">Post Content:</label>
        <textarea id="content"
            name="content">Welcome to the Sarafi platform. This article introduces our services and features.</textarea>

        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="draft">Draft</option>
            <option value="published" selected>Published</option>
        </select>

        <br>
        <button type="submit">Update Post</button>
    </form>

    <a href="{{ route('blog.index') }}">Back to Blog Posts</a>
</body>

</html>