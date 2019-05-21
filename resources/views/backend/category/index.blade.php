@extends('backend.extend')
@section('content')
<div class="container-fluid">
	<h3>Category</h3>
	<input type="button" name="add" value="ADD" class="btn btn-primary" id="show-create-modal">
	<table class="table table-hover" id="table_category">
		<thead>
			<tr class="table-primary">
				<th>ID</th>
				<th>Name</th>
				<th>Description</th>
				<th>Show</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach( $data as $category)
			<tr id="row-{{$category->id}}">
				<td>{{ $category->id }}</td>
				<td>{{ $category->name }}</td>
				<td>{{ $category->description }}</td>
				<td>
					<input type="button" name="show" data-id="{{$category->id}}" class="btn btn-success cate-show" value="SHOW">
				</td>
				<td>
					<input type="button" name="edit" data-id="{{$category->id}}" class="btn btn-primary edit-category" value="EDIT">
				</td>
				<td>
					<input type="button" name="delete" data-id="{{$category->id}}" 
					class="btn btn-danger delete-category" value="DELETE">
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $data->links() }}
</div>
@include('backend.category.modalShow')
@include('backend.category.modalCreate')
@include('backend.category.modalEdit')
@endsection