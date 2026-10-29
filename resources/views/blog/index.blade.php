@extends('layouts.app')
@section('title', 'Blog | Atlantic Oil')
@section('content-direction', 'ltr')
@section('content')
<div class="crud-container">
    <header class="crud-page-header"><div><h1>Blog posts</h1><p>Manage articles and product updates.</p></div><a class="button" href="{{ route('blog.create') }}"><i class="fas fa-plus" aria-hidden="true"></i>Write post</a></header>
    @if(session('success'))<div class="crud-alert crud-alert--success" role="status">{{ session('success') }}</div>@endif
    @if(session('error'))<div class="crud-alert crud-alert--error" role="alert">{{ session('error') }}</div>@endif
    <div class="crud-card"><div class="crud-table-wrap"><table class="crud-table"><thead><tr><th>Title</th><th>Content preview</th><th>Actions</th></tr></thead><tbody>
    @forelse($posts as $post)
        <tr><td class="crud-table__primary">{{ $post['title'] }}</td><td class="crud-table__muted">{{ Str::limit($post['content'], 100) }}</td><td><div class="crud-actions"><a class="action-link" href="{{ route('blog.show', $post['id']) }}">View</a><a class="action-link" href="{{ route('blog.edit', $post['id']) }}">Edit</a><form action="{{ route('blog.destroy', $post['id']) }}" method="POST" onsubmit="return confirm('Delete this post?')">@csrf @method('DELETE')<button class="action-button action-button--danger" type="submit">Delete</button></form></div></td></tr>
    @empty
        <tr><td colspan="3"><div class="crud-empty"><h2>No posts yet</h2><p>Publish the first article to start your blog.</p><a class="button" href="{{ route('blog.create') }}">Write first post</a></div></td></tr>
    @endforelse
    </tbody></table></div></div>
</div>
@endsection