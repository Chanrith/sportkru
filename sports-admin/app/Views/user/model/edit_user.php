<div >
	<form class="row g-3"id="formData" autocomplete="off">
		<div class="modal-body p-2">
			<div class="row">
				<div class="col-sm-6 ">
					<div class="mb-3  form-group">
						<label for="customername-field" class="form-label">First Name</label>
						<input type="text" id="first_name" value="<?=$edit->first_name?>" name="first_name" class="form-control" placeholder="Enter First Name" required />
					</div>
				</div>
				<div class="col-sm-6">
					<div class="mb-3 form-group">
						<label for="email-field" class="form-label">Last Name</label>
						<input type="text" id="name-field" value="<?=$edit->last_name?>" name="last_name" class="form-control" placeholder="Enter Last Name" />
					</div>
				</div>
				<div class="col-sm-6">
					<div class="mb-3  form-group">
						<label for="email-field" class="form-label">Email</label>
						<input type="email" id="name-field"  value="<?=$edit->email?>" name="email" class="form-control" placeholder="Enter Email" required />
					</div>
				</div>
				<div class="col-sm-6">
					<div class="mb-3  form-group">
						<label for="email-field" class="form-label">Mobile</label>
						<input type="number" minlength ="10"  value="<?=$edit->mobile?>" maxlength="10"id="name-field" name="mobile" class="form-control" placeholder="Enter Mobile" required />
					</div>
				</div>
				<div class="col-sm-6 ">
					<div class="mb-3 form-group">
						<label for="email-field" class="form-label">User Name</label>
						<input type="text" id="name-field" name="user_name" value="<?=$edit->user_name?>"class="form-control" placeholder="Enter User Name" required />
					</div>
				</div>
				<div class="col-sm-6  form-group">
					<div class="mb-3  form-group">
						<label for="customername-field" class="form-label">Password</label>
						<input type="password" id="customername-field" name="user_pwd" minlength="6" class="form-control" placeholder="Enter your password" />
					</div>
				</div>
				<div class="col-sm-6">
					<div class="mb-3  form-group">
						<label for="email-field" class="form-label">Role</label>
						<select class="form-control" data-trigger name="role" id="role-field" >
							<option disabled selected value label="">Select Role</option>
							<?php foreach($roles as $row){?>
							<option <?=($edit->role==$row->role_id)?"selected":""?> value="<?=$row->role_id?>"><?=$row->role_name?></option>
							<?php } ?>
						</select>
					</div>
					<div>
						<label for="status-field" class="form-label">Status</label>
						<select class="form-control" data-trigger name="status" id="status-field" >
							<option value="">Status</option>
							<option value="1" <?=($edit->status==1)?"selected":""?>>Active</option>
							<option value="0" <?=($edit->status==0)?"selected":""?>>Inactive</option>
						</select>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="mb-3  form-group profile_img_upload">
						<label for="proimage" class="form-label d-block">Profile Image</label>
						<div class="pro_upload">
							<div class="img_close">
								<?php if($edit->photo==''){?>
								<img  id="addImg" src="uploads/default-user.jpeg" />
								<?php }else{ ?>
								<img  id="addImg" src="uploads/user/<?=$edit->photo?>" />
								<span id="removeBtn" onclick="deleteImage(<?=$edit->user_id?>)"><i class="ri-delete-bin-5-fill fs-16"></i></span>
								<?php } ?>
							</div>
							<div>
								<input type="file" name="photo" accept="image/*" onchange="loadFile(event)" >
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<div class="hstack gap-2 justify-content-end">
				<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success">Save</button>
			</div>
		</div>
	</form>
</div>					
<script>
	var loadFile1 = function(event) {
	var output = document.getElementById('editImg');
	output.src = URL.createObjectURL(event.target.files[0]);
	output.onload = function() {
	URL.revokeObjectURL(output.src)  // free memory
	}
	};
	
	var loadFile = function(event) {
	var output = document.getElementById('addImg');
	output.src = URL.createObjectURL(event.target.files[0]);
	output.onload = function() {
	URL.revokeObjectURL(output.src) // free memory
	}
	};
	    
	</script> 
<script>
	jQuery(document).ready(function() {
	    jQuery('#formData').formValidation({
	       framework: 'bootstrap',
	       fields: {
	           first_name: {
	               validators: {
	                   notEmpty: {
	                       message: 'First name is required'
	                   }
	               }
	           },
               user_name: {
	               validators: {
	                   notEmpty: {
	                       message: 'User name is required'
	                   }
	               }
	           },
               email: {
	               validators: {
	                   notEmpty: {
	                       message: 'Email is required'
	                   }
	               }
	           },
	           mobile: {
	               validators: {
	                   notEmpty: {
	                       message: 'Mobile number is required'
	                   }
	               }
	           }
	       }
	   })
    .on('success.form.fv', function(e) {
			// Prevent form submission
			e.preventDefault();
			var form = document.querySelector('#formData');
			var formData = new FormData(form);
			$.ajax({
                    type:'POST',
                    url:'<?=base_url()?>/user/saveUser/<?=$edit->user_id?>',
                    data:formData,
				    cache:false,
					contentType: false,
					processData: false, // serializes the form's elements.
                    dataType:'json',
                    success:function(result)
					{ 
						if(result==false)
						{
							toastr.warning('Username or Email already exist','Already Exist');
						}
						else if(result==true)
						{
							$('.btn-close').trigger('click');
							toastr.success('User added successfully','Success');
							getUsers();
						}
					}
			});
        });
    });
	function deleteImage(id)
	{
	    $.confirm({
	        title: 'Delete Image',
	        content: 'Do you want to delete image ?',
	        type: 'green',
	        typeAnimated: true,
	        closeIcon: true,
	        buttons: {
	            tryAgain: {
	                text: 'Confirm',
	                btnClass: 'btn-green',
	                action: function(){
	                  $.ajax({
	                    type:'POST',
	                    url:'<?=base_url()?>/user/deleteImage/'+id,
	                    dataType:'json',
	                    success:function(data)                      
	                    {
	                      	toastr.success("Image Deleted Successfully!", "Success");
	                      	$('#addImg').removeAttr('src');
	                      	$('#addImg').attr('src','uploads/default-user.jpeg');
	                      	$('#removeBtn').remove();
	                      	getUsers();
	                    } 
	                  });
	                }
	            },
	            close:function(){
	              
	            },
	        }
	    });
	}
</script>