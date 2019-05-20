<!-- The Modal Edit Category -->
<div class="modal" id="modalEdit">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Edit Category</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form method="post" action="{{ route('category.update','id') }}">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="id" value="{{ $category->id }}"></input>
				<!-- Modal body -->
				<div class="modal-body">
					<div class="form-group">
						<label for="name">Name </label>
						<input type="text" name="name" id="nameModal" class="form-control" placeholder="Category Name">
					</div>
					<div>
						<label for="description">Description </label>
						<input type="text" name="description" id="desModal" class="form-control" placeholder="Category Name">
					</div>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<input type="submit" name="edit" class="btn btn-success" value="EDIT">
				</div>
			</form>
		</div>
	</div>
</div>