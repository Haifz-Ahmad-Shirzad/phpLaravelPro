@extends('layouts.app')
@section('title', $post['title'].' | Atlantic Oil')
@section('content-direction', 'ltr')
@section('content')
<div class="crud-container"><article class="crud-card crud-detail-card"><p class="eyebrow" style="color:var(--blue-700)">Article #{{ $post['id'] }}</p><h1>{{ $post['title'] }}</h1><div class="crud-content">{{ $post['content'] }}</div>
    <div class="form-actions"><a class="button-secondary" href="{{ route('blog.index') }}">Back to posts</a><a class="button" href="{{ route('blog.edit', $post['id']) }}">Edit post</a></div>
</article></div>
@endsection