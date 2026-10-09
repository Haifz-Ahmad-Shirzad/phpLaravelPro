<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Blog Posts</title>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
</head>

<body>
    <h1>All Blog Posts</h1>

    <a href="{{ route('blog.create') }}">Create New Post</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Introduction to Sarafi</td>
                <td>Admin</td>
                <td>News</td>
                <td>Published</td>
                <td>
                    <a href="{{ route('blog.show', 1) }}">View</a>
                    <a href="{{ route('blog.edit', 1) }}">Edit</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Financial Management Tips</td>
                <td>Admin</td>
                <td>Finance</td>
                <td>Draft</td>
                <td>
                    <a href="{{ route('blog.show', 2) }}">View</a>
                    <a href="{{ route('blog.edit', 2) }}">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>