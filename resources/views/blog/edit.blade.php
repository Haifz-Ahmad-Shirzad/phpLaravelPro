@extends('layouts.app')
@section('title', 'Edit post | Atlantic Oil')
@section('content-direction', 'ltr')
@section('content')
<div class="crud-container"><div class="crud-card crud-form-card"><h1>Edit post</h1><p>Update “{{ $post['title'] }}”.</p>
    @if($errors->any())<div class="crud-alert crud-alert--error" role="alert"><strong>Please review the highlighted fields.</strong></div>@endif
    <form class="crud-form" action="{{ route('blog.update', $post['id']) }}" method="POST">@csrf @method('PUT')
        <div class="form-field"><label for="title">Title</label><input id="title" name="title" value="{{ old('title', $post['title']) }}" required maxlength="255" @if($errors->has('title')) aria-invalid="true" @endif>@error('title')<p class="field-error">{{ $message }}</p>@enderror</div>
        <div class="form-field"><label for="content">Content</label><textarea id="content" name="content" required @if($errors->has('content')) aria-invalid="true" @endif>{{ old('content', $post['content']) }}</textarea>@error('content')<p class="field-error">{{ $message }}</p>@enderror</div>
        <div class="form-actions"><a class="button-secondary" href="{{ route('blog.index') }}">Cancel</a><button class="button" type="submit">Save changes</button></div>
    </form>
</div></div>
@endsection