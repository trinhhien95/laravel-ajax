<!-- The Modal Add Category -->
<div class="modal fade" id="modalCreate" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Add Category</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form method="post" id="createForm">
				<!-- Modal body -->
				<div class="modal-body">
					<div class="form-group">
						<label for="name">Name </label>
						<input type="text" name="name" id="name_category" class="form-control" placeholder="category name" required>
					</div>
					<div>
						<label for="description">Description </label>
						<input type="text" name="description" id="des_category" class="form-control" placeholder="category description">
					</div>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<input type="button" name="add" id="add-category" class="btn btn-success" value="ADD">
				</div>
			</form>
		</div>
	</div>
</div>