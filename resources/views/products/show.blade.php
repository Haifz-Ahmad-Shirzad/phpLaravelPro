@extends('layouts.app')
@section('title', $product['name'].' | Atlantic Oil')
@section('content-direction', 'ltr')
@section('content')
<div class="crud-container"><article class="crud-card crud-detail-card">
    <img class="crud-product-image" src="{{ asset('images/white5.png') }}" alt="{{ $product['name'] }}">
    <h1>{{ $product['name'] }}</h1>
    <dl class="crud-detail-grid"><div class="crud-detail"><dt>Category</dt><dd>{{ $product['category'] }}</dd></div><div class="crud-detail"><dt>Type</dt><dd>{{ $product['type'] }}</dd></div><div class="crud-detail"><dt>Price</dt><dd>{{ number_format($product['price'], 2) }} AFN</dd></div><div class="crud-detail"><dt>Record ID</dt><dd>{{ $product['id'] }}</dd></div></dl>
    <div class="form-actions"><a class="button-secondary" href="{{ route('products.index') }}">Back to products</a><a class="button" href="{{ route('products.edit', $product['id']) }}">Edit product</a></div>
</article></div>
@endsection