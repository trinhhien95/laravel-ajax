@extends('backend.master')
@section('content')
<div class="container-fluid">
	<h3>Category</h3>
	<?php if (session('message')) echo "<h4 style='color:green;'>".session('message')."</h4>"; ?>
	<input type="sublit" name="add" value="ADD" class="btn btn-primary" data-toggle="modal" data-target="#modalCreate">
	<table class="table table-hover" id="table_category">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Description</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach( $data as $category)
			<tr>
				<td>{{ $category->id }}</td>
				<td>{{ $category->name }}</td>
				<td>{{ $category->description }}</td>
				<td>
					<input type="submit" name="edit" id="edit" class="btn btn-primary" value="EDIT" data-toggle="modal" data-target="#modalEdit" data-id="{{$category->id}}"
					data-cate_name="{{$category->name}}" data-cate_des="{{$category->description}}">
				</td>
				<td>
					<form method="post" action="{{ route('category.destroy',$category->id) }}">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="id" value="{{ $category->id }}"></input>
						<input type="submit" name="delete" class="btn btn-danger" value="DELETE">
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@include('backend.modelCreate')
@include('backend.modelEdit')
@endsection