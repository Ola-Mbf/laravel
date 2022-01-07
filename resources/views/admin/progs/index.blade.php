@extends('layouts.app')
@section('content')
<div class="container text-center">
	<h1>All Progss</h1>
</div>

<div class="container">
	<table>
  <tr>
    <th>ID</th>
    <th>name</th>
    <th>Company</th>
    <th>Version</th>
    <th>Description</th>
    <th>URL</th>
    <th>Size</th>
    <th>Image</th>
    <th>Category</th>
    <th>Operting system</th>
    <th>Type</th>
    <th>Core type</th>
    <th>Lisence</th>
    <th>Controller</th>

  </tr>
  @foreach($progs as $prog)
	  <tr>
	    <td>{{$prog->id}}</td>
	    <td>{{$prog->name}}</td>
	    <td>{{$prog->company}}</td>
	    <td>{{$prog->version}}</td>
	    <td>{{$prog->description}}</td>
	    <td>{{$prog->URL}}</td>
	    <td>{{$prog->size}}</td>
	    <td><img width="70" height="30" src="{{asset('upload/progs/'.$prog->image)}}" alt=""></td>
	    <td>{{$prog->category->name}}</td>
	    <td>{{$prog->operting_system}}</td>
	    <td>{{$prog->type}}</td>
	    <td>{{$prog->coretype}}</td>
	    <td>{{$prog->lisence}}</td>
	 	    <td> <div class="btn-group">
			<!--     <button type="button" class="btn btn-primary">Update</button> -->
			<a class="btn btn-primary" href="/progss/edit/{{$prog->id}}">Update</a>
			<a class="btn btn-danger" href="/progs/delete/{{$prog->id}}">Delete</a>
			    
			  </div>
</td>
	  </tr>
  @endforeach
</table>
</div>

 @endsection