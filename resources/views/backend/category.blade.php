@extends('backend.master')
@section('content')
	<div class="container-fluid">
		<h3>Category</h3>
		<?php if (session('message')) echo "<h4 style='color:green;'>".session('message')."</h4>"; ?>
		<input type="sublit" name="add" value="ADD" class="btn btn-primary" data-toggle="modal" data-target="#modalCategory">
		<table class="table table-hover">
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
			        <td><a href="{{ route('category.edit',$category->id) }}"><input type="submit" name="edit" class="btn btn-primary" value="EDIT"></a></td>
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
<!-- The Modal Add Category -->
<div class="modal" id="modalCategory">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form method="post" action="{{ route('category.store') }}" >
      		{{ csrf_field() }}
	      <!-- Modal body -->
	      <div class="modal-body">
	      	<div class="form-group">
	      		<label for="name">Name </label>
	      		<input type="text" name="name" class="form-control" placeholder="Category Name">
	      	</div>
	        <div>
	        	<label for="description">Description </label>
	        	<input type="text" name="description" class="form-control" placeholder="Category Name">
	        </div>
	      </div>

	      <!-- Modal footer -->
	      <div class="modal-footer">
	        <input type="submit" name="add" class="btn btn-success" value="ADD">
	      </div>
      </form>
    </div>
  </div>
</div>
@endsection