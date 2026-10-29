@extends('layouts.app')
@section('title', 'Services | Atlantic Oil')
@section('content-direction', 'ltr')
@section('content')
<div class="crud-container">
    <header class="crud-page-header"><div><h1>Services</h1><p>Manage the services offered by Atlantic Oil.</p></div><a class="button" href="{{ route('services.create') }}"><i class="fas fa-plus" aria-hidden="true"></i>Add service</a></header>
    @if(session('success'))<div class="crud-alert crud-alert--success" role="status">{{ session('success') }}</div>@endif
    @if(session('error'))<div class="crud-alert crud-alert--error" role="alert">{{ session('error') }}</div>@endif
    <div class="crud-card"><div class="crud-table-wrap"><table class="crud-table"><thead><tr><th>Title</th><th>Description</th><th>Actions</th></tr></thead><tbody>
    @forelse($services as $service)
        <tr><td class="crud-table__primary">{{ $service['title'] }}</td><td class="crud-table__muted">{{ Str::limit($service['description'], 100) }}</td><td><div class="crud-actions"><a class="action-link" href="{{ route('services.show', $service['id']) }}">View</a><a class="action-link" href="{{ route('services.edit', $service['id']) }}">Edit</a><form action="{{ route('services.destroy', $service['id']) }}" method="POST" onsubmit="return confirm('Delete this service?')">@csrf @method('DELETE')<button class="action-button action-button--danger" type="submit">Delete</button></form></div></td></tr>
    @empty
        <tr><td colspan="3"><div class="crud-empty"><h2>No services yet</h2><p>Add your first service to begin.</p><a class="button" href="{{ route('services.create') }}">Add first service</a></div></td></tr>
    @endforelse
    </tbody></table></div></div>
</div>
@endsection