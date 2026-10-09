<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog Post</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>

<body>
    <h1>Create New Blog Post</h1>

    <form action="#" method="POST">
        <label for="title">Post Title:</label>
        <input type="text" id="title" name="title">

        <label for="author">Author:</label>
        <input type="text" id="author" name="author">

        <label for="category">Category:</label>
        <select id="category" name="category">
            <option value="">Select Category</option>
            <option value="news">News</option>
            <option value="finance">Finance</option>
            <option value="updates">Updates</option>
        </select>

        <label for="content">Post Content:</label>
        <textarea id="content" name="content"></textarea>

        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="draft">Draft</option>
            <option value="published">Published</option>
        </select>

        <br>
        <button type="submit">Create Post</button>
    </form>

    <a href="{{ route('blog.index') }}">Back to Blog Posts</a>
</body>

</html>