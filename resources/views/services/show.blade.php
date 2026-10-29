@extends('layouts.app')
@section('title', $service['title'].' | Atlantic Oil')
@section('content-direction', 'ltr')
@section('content')
<div class="crud-container"><article class="crud-card crud-detail-card"><p class="eyebrow" style="color:var(--blue-700)">Service #{{ $service['id'] }}</p><h1>{{ $service['title'] }}</h1><p class="crud-content">{{ $service['description'] }}</p>
    <div class="form-actions"><a class="button-secondary" href="{{ route('services.index') }}">Back to services</a><a class="button" href="{{ route('services.edit', $service['id']) }}">Edit service</a></div>
</article></div>
@endsection