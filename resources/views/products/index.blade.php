@extends('layout')

@section('title', 'Products List')

@section('content')

<div class="container mt-5">
    <div class="text-center">
        <h1 class="mb-4">Products</h1>
        <p class="lead">Manage your products easily and efficiently .</p>

        <a href="{{ route('products.create') }}" class="btn btn-success">Add New</a>
    </div>
</div>

@endsection