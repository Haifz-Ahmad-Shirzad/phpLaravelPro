@extends('layouts.app')
@section('title', 'Add product | Atlantic Oil')
@section('content-direction', 'ltr')
@section('content')
<div class="crud-container">
    <div class="crud-card crud-form-card"><h1>Add product</h1><p>Enter the product details below.</p>
        @if($errors->any())<div class="crud-alert crud-alert--error" role="alert"><strong>Please review the highlighted fields.</strong></div>@endif
        <form class="crud-form" action="{{ route('products.store') }}" method="POST">@csrf
            <div class="form-field"><label for="name">Name</label><input id="name" name="name" value="{{ old('name') }}" required maxlength="255" @if($errors->has('name')) aria-invalid="true" @endif>@error('name')<p class="field-error">{{ $message }}</p>@enderror</div>
            <div class="form-field"><label for="category">Category</label><input id="category" name="category" value="{{ old('category') }}" required maxlength="255" @if($errors->has('category')) aria-invalid="true" @endif>@error('category')<p class="field-error">{{ $message }}</p>@enderror</div>
            <div class="form-field"><label for="type">Type</label><input id="type" name="type" value="{{ old('type') }}" required maxlength="255" @if($errors->has('type')) aria-invalid="true" @endif>@error('type')<p class="field-error">{{ $message }}</p>@enderror</div>
            <div class="form-field"><label for="price">Price (AFN)</label><input id="price" type="number" min="0" step="0.01" name="price" value="{{ old('price') }}" required @if($errors->has('price')) aria-invalid="true" @endif>@error('price')<p class="field-error">{{ $message }}</p>@enderror</div>
            <div class="form-actions"><a class="button-secondary" href="{{ route('products.index') }}">Cancel</a><button class="button" type="submit">Save product</button></div>
        </form>
    </div>
</div>
@endsection