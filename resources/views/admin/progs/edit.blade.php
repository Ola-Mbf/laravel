@extends('layouts.app')
@section('content')
<div class="container">

	<div class="container text-center">
		<h2>Update Prog</h2>
	</div>
	<form action="/progs/edit/{{$prog->id}}" method="POST">
		@csrf
  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="name" name="name" value="{{ $prog->name }}">
  </div>


  <button type="submit" class="btn">Update</button>
</form>

</div>

 @endsection