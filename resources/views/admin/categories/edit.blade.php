@extends('layouts.app')
@section('content')
<div class="container">

	<div class="container text-center">
		<h2>Update Category</h2>
	</div>
	<form action="/categories/edit/{{$category->id}}" method="POST">
		@csrf
  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="name" name="name" value="{{ $category->name }}">
  </div>


  <button type="submit" class="btn">Update</button>
</form>

</div>

 @endsection