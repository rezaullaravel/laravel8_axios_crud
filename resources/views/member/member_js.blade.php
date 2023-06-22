




<script type="text/javascript">
	$(document).ready(function(){
		//add member
		  $(document).on('click','#add_memeber',function(){
		  	let name=$('#name').val();
		  	let phone=$('#phone').val();
		  	//alert(phone);

		  	let url="/add/member";
		  	let data={
		  		name:name,
		  		phone:phone
		  	}

		  	//console.log(data);

		  	//axios 
		  	axios.post(url,data)
				  .then(function (response) {
				    $('.alert').show();
				    $('.alert').html(response.data.status);
				    $('#addForm')[0].reset();
				    $('.showErr').text('');
				    $('#addModal').modal('hide');
				    $('.table').load(location.href+' .table');
				  })
				  .catch(function (error) {
				    // handle error
				    //console.log(error);
				    //console.log(error.response.data.errors.name);
				    $.each(error.response.data.errors,function(index,value){
				    	$('.showErr').append('<span class="text-danger mb-3" style="margin-left:20px;">'+value+'</sapn>'+'<br/>');
				    });
				  })
		  	//axios end

		

		  });
		//add member end


		  //show data in edit modal
		  $(document).on('click','.editBtn',function(){
		  	let id=$(this).data('id');
		  	//alert(id);
		  	$('#updateModal').modal('show');

		  	//axios 
		  	axios.get('/edit/member/'+id)
				  .then(function (response) {
				  //console.log(response);

				  	$('#update_name').val(response.data.member.name);
				  	$('#update_phone').val(response.data.member.phone);
				  	$('#update_id').val(id);
				  })
		  	//axios end
		  })
		  //show data in edit modal end



		  //update member
		  $(document).on('click','#update_memeber',function(){
		  	let id=$('#update_id').val();
		  	let name=$('#update_name').val();
		  	let phone=$('#update_phone').val();

		  	let data={
		  		name:name,
		  		phone:phone,
		  	}

		  	//console.log(data);

		  	//axios 
		  	axios.post('/update/member/'+id,data)
				  .then(function (response) {
				    $('.alert').show();
				    $('.alert').html(response.data.status);
				    $('#updateForm')[0].reset();
				    $('.showErr').text('');
				    $('#updateModal').modal('hide');
				    $('.table').load(location.href+' .table');
				  })
				  .catch(function (error) {
				    // handle error
				    //console.log(error);
				    //console.log(error.response.data.errors.name);
				    $.each(error.response.data.errors,function(index,value){
				    	$('.showErr').append('<span class="text-danger mb-3" style="margin-left:20px;">'+value+'</sapn>'+'<br/>');
				    });
				  })
		  	//axios end
		  });
		  //update member end



		  //delete member
		  $(document).on('click','.deletetBtn',function(){
		  	let id=$(this).data('id');
		  	//alert(id);

		  	if(confirm('Are you sure to delete this item???')){
		  		//axios 
		  	      axios.get('/delete/member/'+id)
					  .then(function (response) {
					    $('.alert').show();
					    $('.alert').html(response.data.status);
					    $('.table').load(location.href+' .table');
					  })
				 
		  	//axios end
		  	}//end if
		  })
		  //delete member end
	});
</script>