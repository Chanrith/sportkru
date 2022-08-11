<style>
.widget-content-area {padding: 20px;padding-top: 0px;padding-bottom: 0px;}
.note-editable {height: 182px;}
.note-popover.popover.in.note-link-popover.bottom {display: none;}
.note-popover.popover.in.note-image-popover.bottom {display: none;}
.note-popover.popover.in.note-table-popover.bottom {display: none;}
</style>
<div class="page-content">
   <div class="container-fluid">
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box pt-3 pb-2">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title">Profile</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-3 pt-3">
                        <form id="profileForm"  enctype="multipart/form-data" method="post">
							<input type="hidden" id="id" name="user_id" value="<?=$user->user_id?>">
                            <div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="cname" class="control-label col-sm-12">Name *</label>
										<div class="col-sm-12">
											<input class="form-control" name="user_name" id="name" value="<?=$user->user_name?>" placeholder="Enter employee name" autofocus type="text">
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="cname" class="control-label col-sm-12">Mobile *</label>
										<div class="col-sm-12">
											<input class="form-control" name="mobile" id="mobile" value="<?=$user->mobile?>" onkeypress="return isMobileNumber(event)" placeholder="Enter mobile" autofocus type="text">
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="cname" class="control-label col-sm-12">Email *</label>
										<div class="col-sm-12">
											<input class="form-control" name="email" id="email" value="<?=$user->email?>" placeholder="Enter email" autofocus type="text">
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="cname" class="control-label col-sm-12">Password</label>
										<div class="col-sm-12">
											<input class="form-control" name="user_pwd" id="password"  placeholder="Enter password" autofocus type="password">
										</div>
									</div>
								</div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="col-sm-12 text-right">
                                            <a class="btn btn-danger mb-4" href="<?=base_url()?>user"> Cancel</a>
                                            <button class="btn btn-primary mb-4" type="submit"> Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<!-- End page content wrapper -->
<script>
		$(document).ready(function() {
		    $('#profileForm').formValidation({
		        framework: 'bootstrap',
		        fields: {
					user_name: {
		                validators: {
		                    notEmpty: {
		                        message: 'Name is required'
		                    }
		                }
		            },
		            last_name: {
		                validators: {
		                    notEmpty: {
		                        message: 'Last name is required'
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
		                        message: 'Phone number is required'
		                    }
		                }
		            }
		        }
		    })
			.on('success.form.fv', function(e) {
				// Prevent form submission
				e.preventDefault();
				var form = document.querySelector('#profileForm');
				var formData = new FormData(form);
				$.ajax({
		            type:'POST',
		            url:'<?=base_url()?>/user/saveProfile/<?=$user->user_id?>',
		            data:formData,
					cache:false,
					contentType: false,
					processData: false, // serializes the form's elements.
		            dataType:'json',
		            success:function(result)
					{ 
						toastr.success('Profile updated successfully!','Success');
						setTimeout(function(){location.reload();},1000);
					}
				});
		    });
		});
		$(document).ready(function() {
		    $('#updatePassword').formValidation({
		        framework: 'bootstrap',
		        fields: {
					old_password: {
		                validators: {
		                    notEmpty: {
		                        message: 'Old password is required'
		                    }
		                }
		            },
		            new_password: {
		                validators: {
		                    notEmpty: {
		                        message: 'New password is required'
		                    }
		                }
		            },
		            confirm_password: {
		                validators: {
		                    notEmpty: {
		                        message: 'Confirm password is required'
		                    },
		                    identical: {
		                        field: 'new_password',
		                        message: 'The password and its confirm are not the same'
		                    }
		                }
		            }
		        }
		    })
			.on('success.form.fv', function(e) {
				// Prevent form submission
				e.preventDefault();
				var form = document.querySelector('#updatePassword');
				var formData = new FormData(form);
				$.ajax({
		            type:'POST',
		            url:'<?=base_url()?>/user/changePassword/<?=$user->user_id?>',
		            data:formData,
					cache:false,
					contentType: false,
					processData: false, // serializes the form's elements.
		            dataType:'json',
		            success:function(result)
					{ 
						if(result==100)
						{
							toastr.success('Password updated successfully!','Success');
							setTimeout(function(){location.reload();},800);
						}
						else
						{
							toastr.warning('Old Password not correct','Invalid Old Password!');
						}
					}
				});
		    });
		});
		var loadFile = function(event) {
		  var output = document.getElementById('output');
		  output.src = URL.createObjectURL(event.target.files[0]);
		  output.onload = function() {
		    URL.revokeObjectURL(output.src) // free memory
		  }
		};

		function deleteImage(id)
		{
		    $.confirm({
		        title: 'Update Status',
		        content: 'Do you want to update status ?',
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
		                      setTimeout(function(){location.reload();},1000);
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