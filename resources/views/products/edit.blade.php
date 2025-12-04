@extends('layout')

@section('title', 'Products List')

@section('content')

<div class="container mt-5">
    <div class="text-center">
        <h1 class="mb-4">Edit Product</h1>
        <a href="{{ route('products.index') }}" class="text-primary">Return to List</a>
    </div>

		@isset($product)
			
    <form action="{{ route('products.update', $product->id) }}" method="post">
			@csrf
			@method("PUT")
			<div class="mb-3">
					<label class="form-label">Product Name</label>
					<input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">

					@error('name')
					<p class="text-danger">
						{{ $message }}
					</p>	
					@enderror
			</div>
			<div class="mb-3">
					<label class="form-label">Description</label>
					<input type="text" class="form-control" id="description" name="description"  value="{{ $product->description }}">
					
					@error('description')
					<p class="text-danger">
						{{ $message }}
					</p>	
					@enderror
			
				</div>
			<div class="mb-3">
					<label class="form-label">Quanitity</label>
					<input type="number" class="form-control" id="quantity" name="quantity"  value="{{ $product->quantity }}">
					
					@error('quantity')
					<p class="text-danger">
						{{ $message }}
					</p>	
					@enderror
			</div>
		
			<button type="submit" class="btn btn-success">Save Changes</button>
    </form>
		@endisset


</div>

@endsection