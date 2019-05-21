$(document).ready(function(){
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	//show category
	$(document).on('click','.cate-show',function(){
		$("#table-category-show tbody").find('.row-show').remove();
		var id = $(this).data('id');
		$.ajax({
			type:"get",
			url:"http://localhost/api/category2/"+id,
			success: function(data){
				$('#table-category-show').append(
					"<tr class='row-show'>"+
					"<td>"+id+"</td>"+
					"<td>"+data.name+"</td>"+
					"<td>"+data.description+"</td>"+
					"</tr>"
					);
			},
			error: function (data) {
				console.log('Error:', data);
			}
		})
		$('#modalShow').modal('show');
	});
	$(document).on('click','#show-create-modal',function(){
		$('#modalCreate').modal('show');
	});

	//create category
	$(document).on('click','#add-category',function(){
		$.ajax({
			method:"POST",
			url:"http://localhost/api/category2",
			data:{
				name: $('#name_category').val(),
				description: $('#des_category').val()
			},
			success: function(data)
			{
				$('#table_category').append(
					"<tr id='row-"+data.id+"'>"+
					"<td>"+data.id+"</td>"+
					"<td>"+data.name+"</td>"+
					"<td>"+data.description+"</td>"+
					"<td>"+
					'<input type="button" name="show" class="btn btn-success cate-show" value="SHOW" data-id="'+data.id+'">'+
					"</td>"+
					"<td>"+
					'<input type="button" name="edit" class="btn btn-primary edit-category" value="EDIT" data-id="'+data.id+'">'+
					"</td>"+
					"<td>"+
					'<input type="button" name="delete" class="btn btn-danger delete-category" value="DELETE" data-id="'+data.id+'">'+
					"</td>"+
					+"</tr>"
					);
				$('#modalCreate').modal('hide');
				$('#createForm').trigger("reset");
			},
			error: function (data) {
				console.log('Error:', data);
			}
		});

	});

	//detele
	$(document).on('click','.delete-category',function(){
		var id = $(this).data('id');
		if( confirm("Are you sure want to delete ?") == true )
		{
			$.ajax({
				type: "DELETE",
				url: "http://localhost/api/category2/"+id,
				success: function(data)
				{
					$('#row-'+id).remove();
				},
				error: function (data) {
					console.log('Error:', data);
				}
			});
		}
	});

	//pass data to modal edit
	$(document).on('click','.edit-category',function(){
		$('#modalEdit').modal('show');
		var id = $(this).data('id');
		$.get('api/category2/' + id +'/edit', function (data) {
			$('#category-id').val(id);
			$('#nameModal').val(data.name);
			$('#desModal').val(data.description);
		})
	});

	//update category
	$(document).on('click','#update-category',function(){
		var id = $('#category-id').val();
		$.ajax({
			type:"PUT",
			url:"http://localhost/api/category2/"+id,
			data:{
				name: $('#nameModal').val(),
				description: $('#desModal').val()
			},
			success: function(data){
				var category = "<tr id='row-"+data.id+"'><td>"+data.id+"</td><td>"+data.name+"</td><td>"+data.description+"</td>";
				category += '<td><input type="button" data-id="'+data.id+'" class="btn btn-success cate-show"'+ 
				'value="SHOW"></td>';
				category += '<td><input type="button" data-id="'+data.id+'" class="btn btn-primary edit-category"'+ 
				'value="EDIT"></td>';
				category += '<td><input type="button" name="delete" data-id="'+id+'"'+ 
				'class="btn btn-danger delete-category" value="DELETE"></td>';
				category += "</tr>";
				$('#row-'+id).replaceWith(category);
				$('#editForm').trigger("reset");
				$('#modalEdit').modal('hide');
			},
			error: function (data) {
				console.log('Error:', data);
			}
		})
	});
});