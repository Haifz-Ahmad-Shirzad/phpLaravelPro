@extends('layouts.app')
@section('title', 'Edit service | Atlantic Oil')
@section('content-direction', 'ltr')
@section('content')
<div class="crud-container"><div class="crud-card crud-form-card"><h1>Edit service</h1><p>Update the details for {{ $service['title'] }}.</p>
    @if($errors->any())<div class="crud-alert crud-alert--error" role="alert"><strong>Please review the highlighted fields.</strong></div>@endif
    <form class="crud-form" action="{{ route('services.update', $service['id']) }}" method="POST">@csrf @method('PUT')
        <div class="form-field"><label for="title">Title</label><input id="title" name="title" value="{{ old('title', $service['title']) }}" required maxlength="255" @if($errors->has('title')) aria-invalid="true" @endif>@error('title')<p class="field-error">{{ $message }}</p>@enderror</div>
        <div class="form-field"><label for="description">Description</label><textarea id="description" name="description" required @if($errors->has('description')) aria-invalid="true" @endif>{{ old('description', $service['description']) }}</textarea>@error('description')<p class="field-error">{{ $message }}</p>@enderror</div>
        <div class="form-actions"><a class="button-secondary" href="{{ route('services.index') }}">Cancel</a><button class="button" type="submit">Save changes</button></div>
    </form>
</div></div>
@endsection