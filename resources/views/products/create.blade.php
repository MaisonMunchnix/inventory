@extends('layout')

@section('title', 'Products List')

@section('content')

<div class="container mt-5">
    <div class="text-center">
        <h1 class="mb-4">Create Product</h1>
        <a href="{{ route('products.index') }}" class="text-primary">Return to List</a>
    </div>


    <form action="{{ route('products.store') }}" method="post">
		@csrf
		<div class="mb-3">
				<label class="form-label">Product Name</label>
				<input type="text" class="form-control" id="name" name="name">

				@error('name')
				<p class="text-danger">
					{{ $message }}
				</p>	
				@enderror
		</div>
		<div class="mb-3">
				<label class="form-label">Description</label>
				<input type="text" class="form-control" id="description" name="description">
				
				@error('description')
				<p class="text-danger">
					{{ $message }}
				</p>	
				@enderror
		
			</div>
		<div class="mb-3">
				<label class="form-label">Quantity</label>
				<input type="number" class="form-control" id="quantity" name="quantity">
				
				@error('quantity')
				<p class="text-danger">
					{{ $message }}
				</p>	
				@enderror
		</div>
	
		<button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>

@endsection