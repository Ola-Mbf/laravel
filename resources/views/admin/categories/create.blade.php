@extends('layouts.app')

@section('content')

<div class="container">

	<div class="container text-center">
		<h2>Create Category</h2>
	</div>
	<form action="/categories/create" method="POST">
	<!-- for protect data -->
		@csrf
  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="name" name="name">
  </div>
 

  <button type="submit" class="btn">Create</button>
</form>

</div>

@endsection
