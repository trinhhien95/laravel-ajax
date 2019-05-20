$(document).ready(function(){
	$('#modalEdit').on('show.bs.modal',function(event){ 
		var modal = $(event.relatedTarget);
		var name = modal.data('cate_name');
		var des = modal.data('cate_des');
		var id = modal.data('id');
		console.log(name);
		$('#modalEdit').find('#nameModal').val(name);
		$('#modalEdit').find('#desModal').val(des);
		$('#modalEdit').find('#id').val(id);
	});
});