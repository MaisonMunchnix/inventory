@extends('layout')

@section('title', 'Products List')

@section('content')

<div class="container mt-5">
    <div class="text-center">
        <h1 class="mb-4">User Login</h1>
    </div>
    
    @if ('errors->any')
        <p class="text-danger">{{ $errors->first() }}</p>            
    @endif

    <form action="{{ route('login.submit') }}" method="post">
			@csrf
			<div class="mb-3">
					<label class="form-label">Email Address</label>
					<input type="email" class="form-control" id="email" name="email">
			</div>
			<div class="mb-3">
					<label class="form-label">Password</label>
					<input type="password" class="form-control" id="password" name="password">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection