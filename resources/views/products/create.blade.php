@extends('layout')

@section('title', 'Products List')

@section('content')

<div class="container mt-5">
    <div class="text-center">
        <h1 class="mb-4">Create Product</h1>
        <a href="{{ route('products.index') }}" class="text-primary">Return to List</a>
    </div>


    <form action="{{ route('products.store') }}" method="post">
			<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Product Name</label>
					<input type="email" class="form-control" id="name" name="name">
			</div>
			<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Description</label>
					<input type="email" class="form-control" id="description" name="description">
			</div>
			<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Product Name</label>
					<input type="number" class="form-control" id="quantity" name="quantity">
			</div>
		
			<button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>

@endsection