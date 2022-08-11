<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Shop Admin - Login</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <meta content="Shop Admin - Login" name="description">
        <meta content="" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=base_url()?>/assets/images/favicon.png">
        <!-- App css -->
        <link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/formValidation.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/toastr.min.css" rel="stylesheet" type="text/css">
        <script src="<?=base_url()?>/assets/js/jquery.min.js"></script>
        <script src="<?=base_url()?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url()?>/assets/js/formValidation.min.js"></script>
        <script src="<?=base_url()?>/assets/js/bootstrap_validation.min.js"></script>
        <script src="<?=base_url()?>/assets/js/toastr.min.js"></script>
    </head>
    <style type="text/css">
        .card{text-align:left;}
        .card .form-control{text-align:left;padding-left:15px !important;}
        .fa-paw{background-color: #FF9800;color: #000;padding: 3px;border-radius: 50%;margin-right: 7px;border: 1px solid #000;}
        .has-error .form-control{border:1px solid red;}
        .has-error small{color:red;}
    </style>
    <body class="account-body accountbg">
        <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active p-3 pt-3" id="LogIn_Tab" role="tabpanel">
                                            <h2 class="text-center"><span style="color:orange"></span> <span style="color:#1066d3"></span></h2>
                                            <h6 class="text-center">Login Account</h6><hr>
                                            <form id="formData" method="post">
                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" name="user_name" id="username" placeholder="Enter username">
                                                </div>
                                                <!--end form-group-->
                                                <div class="form-group">
                                                    <label for="userpassword">Password</label>
                                                    <input type="password" class="form-control" name="user_pwd" id="userpassword" placeholder="Enter password">
                                                </div>
                                                <!--end form-group-->
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12 mt-2"><button id="submitBtn" type="submit" class="btn btn-primary btn-block waves-effect waves-light">Log In <i class="fas fa-sign-in-alt ml-1"></i></button></div>
                                                    <!--end col-->
                                                </div>
                                                <!--end form-group-->
                                            </form>
                                            <!--end form-->
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                                <div class="card-body bg-light-alt text-center" style="padding-top: 0px;margin-top: -10px;"><span class="text-muted d-none d-sm-inline-block">Cuteweb © <?=date('Y')?></span></div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <!-- End Log In page -->
        <!-- jQuery  --> 
        <script>
			$(document).ready(function() {
			    $('#formData').formValidation({
			        framework: 'bootstrap',
			        fields: {
			            user_name: {
			                validators: {
			                    notEmpty: {
			                        message: 'Username is required'
			                    }
			                }
			            },
			            user_pwd: {
			                validators: {
			                    notEmpty: {
			                        message: 'Password is required'
			                    }
			                }
			            }
			        }
			    })
			    .on('success.form.fv', function(e) {
					e.preventDefault();
					var form = document.querySelector('#formData');
					var formData = new FormData(form);
					$.ajax({
			            type:'POST',
			            url:'<?=base_url()?>/login/check_user',
			            data:formData,
						cache:false,
						contentType: false,
						processData: false, // serializes the form's elements.
			            dataType:'json',
			            success:function(result)
						{ 
							if(result==100)
							{
								toastr.success('Logged in successfully!','Success');
								setTimeout(function(){location.reload();},800);
							}
							else if(result==300)
							{
								toastr.warning('Please conatct admin','User Inactive!');
							}
							else
							{
								toastr.warning('Invalid Login Details','Invalid Credentials!');
							}
						}
					});
			    });
			});
		</script>
    </body>
</html>