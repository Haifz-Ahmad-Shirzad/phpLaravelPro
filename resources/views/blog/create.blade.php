@extends('layouts.app')
@section('title', 'Write a post | Atlantic Oil')
@section('content-direction', 'ltr')
@section('content')
<div class="crud-container"><div class="crud-card crud-form-card"><h1>Write a post</h1><p>Share an update, tip, or article with your customers.</p>
    @if($errors->any())<div class="crud-alert crud-alert--error" role="alert"><strong>Please review the highlighted fields.</strong></div>@endif
    <form class="crud-form" action="{{ route('blog.store') }}" method="POST">@csrf
        <div class="form-field"><label for="title">Title</label><input id="title" name="title" value="{{ old('title') }}" required maxlength="255" @if($errors->has('title')) aria-invalid="true" @endif>@error('title')<p class="field-error">{{ $message }}</p>@enderror</div>
        <div class="form-field"><label for="content">Content</label><textarea id="content" name="content" required @if($errors->has('content')) aria-invalid="true" @endif>{{ old('content') }}</textarea>@error('content')<p class="field-error">{{ $message }}</p>@enderror</div>
        <div class="form-actions"><a class="button-secondary" href="{{ route('blog.index') }}">Cancel</a><button class="button" type="submit">Publish post</button></div>
    </form>
</div></div>
@endsection