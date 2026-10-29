@extends('layouts.app')
@section('title', 'Products | Atlantic Oil')
@section('content-direction', 'ltr')
@section('content')
<div class="crud-container">
    <header class="crud-page-header"><div><h1>Products</h1><p>Manage the product catalogue.</p></div><a class="button" href="{{ route('products.create') }}"><i class="fas fa-plus" aria-hidden="true"></i>Add product</a></header>
    @if(session('success'))<div class="crud-alert crud-alert--success" role="status">{{ session('success') }}</div>@endif
    @if(session('error'))<div class="crud-alert crud-alert--error" role="alert">{{ session('error') }}</div>@endif
    <div class="crud-card">
        <div class="crud-table-wrap"><table class="crud-table"><thead><tr><th>Name</th><th>Category</th><th>Type</th><th>Price</th><th>Actions</th></tr></thead><tbody>
        @forelse($products as $product)
            <tr><td class="crud-table__primary">{{ $product['name'] }}</td><td>{{ $product['category'] }}</td><td>{{ $product['type'] }}</td><td>{{ number_format($product['price'], 2) }} AFN</td>
                <td><div class="crud-actions"><a class="action-link" href="{{ route('products.show', $product['id']) }}">View</a><a class="action-link" href="{{ route('products.edit', $product['id']) }}">Edit</a>
                    <form action="{{ route('products.destroy', $product['id']) }}" method="POST" onsubmit="return confirm('Delete this product?')">@csrf @method('DELETE')<button class="action-button action-button--danger" type="submit">Delete</button></form>
                </div></td>
            </tr>
        @empty
            <tr><td colspan="5"><div class="crud-empty"><h2>Your catalogue is ready</h2><p>Add the first product to start building your list.</p><a class="button" href="{{ route('products.create') }}">Add first product</a></div></td></tr>
        @endforelse
        </tbody></table></div>
    </div>
</div>
@endsection