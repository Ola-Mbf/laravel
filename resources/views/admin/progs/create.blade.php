@extends('layouts.app')
@section('content')
<div class="container">

	<div class="container text-center">
		<h1 class="progs_title">create Programs</h1>

	<form action="/progs/create" method="POST" enctype="multipart/form-data">
		@csrf

      <label for="name">Name</label><br>
      <input type="text" name="name" placeholder="Name"><br><br>
      <label for="company">Company</label><br>
      <input type="text" name="company" placeholder=""><br><br>
      <label for="version">Version</label><br>
      <input type="text" name="version" placeholder=""><br><br>
      <label for="description">Description</label><br>
      <textarea name="description"></textarea><br><br>
      <label for="url">URL</label><br>
      <textarea name="URL"></textarea><br><br>
      <label for="size">Size</label><br>
      <input type="number" name="size" placeholder=""><br><br>
    <div class="form-group">
      <label for="image">Image</label><br>
      <input type="file" class="form-control-file border"  id="image" name="image"  ><br><br>
      <label for="category">Category</label><br>
      <!-- <input type="number" name="category_id" placeholder=""><br><br> -->
      <select name = "category_id">
          <option>Select Category</option>
      @foreach ($categories as $category)
        <option  value="{{ $category->id }}">{{$category->name}}</option>
      @endforeach
      </select><br><br>
      <label for="os">Operting system</label><br>
      <select name="operting_system">
        <option>Windows</option>
        <option>Linux</option>
        <option>Mac</option>
        <option>Android</option>
        <option>Ios</option>
      </select><br><br>
      <label for="type">Type</label><br>
      <select name="type">
        <option>Program</option>
        <option>App</option>
      </select><br><br>
      <label for="coretype">Core type</label><br>
      <select name="coretype">
        <option>32bit</option>
        <option>64bit</option>
      </select><br><br>
      <label for="lisence">Lisence</label><br>
      <select name="lisence">
        <option>Free</option>
        <option>Monthly</option>
        <option>Quarterly</option>
        <option>Semi-annual</option>
        <option>annual</option>
      </select><br><br>
   

      <br><br>
      
        <button type="submit" class="bt">Create</button>
      

    </form>
</div>



 @endsection
