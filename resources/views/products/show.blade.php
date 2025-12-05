@extends('layout')

@section('title', 'Products List')

@section('content')

<div class="container mt-5">
    <div class="text-center">
        <h1 class="mb-4">Product Details</h1>
        <a href="{{ route('products.index') }}" class="text-primary">Return to List</a>
    </div>

    @isset($product)
	<table class="table table-bordered">
		<tr>
			<td>ID</td>
			<td>{{ $product->id }}</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>{{ $product->name }}</td>
		</tr>
		<tr>
			<td>Description</td>
			<td>{{ $product->description }}</td>
		</tr>
		<tr>
			<td>Quantity</td>
			<td>{{ $product->quantity }}</td>
		</tr>
	</table>
    @endisset
</div>
@endsection