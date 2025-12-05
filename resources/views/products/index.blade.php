@extends('layout')

@section('title', 'Products List')

@section('content')

<div class="container mt-5">
<div class="text-center">
	<h1 class="mb-4">Products</h1>
	@if (session('success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
				{{ session('success') }}
				<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
		</div>
	@endif

	<p class="lead">Manage your products easily and efficiently .</p>
	<a href="{{ route('products.create') }}" class="btn btn-success">Add New</a>
	
	</form>

		@isset($products)
			<table class="table table-light m-3" >
				<thead class="table-secondary">

				<tr>
					<td>ID</td>
					<td>Product Name</td>
					<td>Description</td>
					<td>Quantity</td>
					<td>Action</td>
				</tr>
				
				</thead>

				<tbody>
					@foreach ($products as $product)
					<tr>
						<td>{{$product->id}}</td>
						<td>{{$product->name}}</td>
						<td>{{$product->description}}</td>
						<td>{{$product->quantity}}</td>
						<td>
							<a href="{{ route('products.edit', $product->id) }}" class="btn btn-secondary">Edit</a>
							<a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View</a>

							<form action="{{ route('products.destroy', $product->id) }}" method="post" style="display:inline">
								@csrf
								@method("DELETE")
								<button type="submit" onclick="return confirm('Delete this {{ $product->name }}?');" class="btn btn-danger">Delete</button>
							</form>
						</td>

					</tr>
					@endforeach
				</tbody>
			</table>
			

			{{ $products->links() }}
			
		@endisset

</div>
</div>

@endsection