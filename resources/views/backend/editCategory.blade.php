@extends('backend.master')
@section('content')
<div class="container-fluid">
	<h3> Edit Category</h3>
	<?php if (session('message')) echo "<h4 style='color:green;'>".session('message')."</h4>"; ?>
	<form method="post" action="{{ route('category.update',$data['id']) }}">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="id" value="{{ $data['id'] }}"></input>
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control" placeholder="Category Name" 
			value="{!! old('name',isset($data) ? $data['name'] :null ) !!}">
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<input type="text" name="description" id="description" class="form-control" placeholder="Category Description" value="{!! old('description',isset($data) ? $data['description'] :null ) !!}">
		</div>
		<button type="submit" class="btn btn-primary">Edit</button>
	</form>
</div>
@endsection