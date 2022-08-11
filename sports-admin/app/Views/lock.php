<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="dark" data-sidebar="dark" data-sidebar-size="lg">
<head>
        <meta charset="utf-8" />
        <title>Zetio | Sign In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- Layout config Js -->
        <script src="<?=base_url()?>/assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?=base_url()?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?=base_url()?>/assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="<?=base_url()?>/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>/assets/css/formValidation.min.css" rel="stylesheet" type="text/css">
        <script src="<?=base_url()?>/assets/js/jquery.min.js"></script>
        <script src="<?=base_url()?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url()?>/assets/js/formValidation.min.js"></script>
        <script src="<?=base_url()?>/assets/js/bootstrap_validation.min.js"></script>
        <link href="<?=base_url()?>/assets/css/toastr.min.css" rel="stylesheet" type="text/css">
        <script src="<?=base_url()?>/assets/js/toastr.min.js"></script>
    </head>

    <body>

        <!-- auth-page wrapper -->
        <div class="auth-page-wrapper  py-5 d-flex justify-content-center align-items-center min-vh-100">
          

            <!-- auth page bg -->
            <div class="auth-one-bg-position auth-one-bg"  id="auth-particles">
                <div class="bg-overlay"></div>
                <div class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                        <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                    </svg>
                </div>
            </div>
            <!-- auth page content -->



            <!-- auth-page content -->
            <div class="auth-page-content overflow-hidden pt-lg-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class=" overflow-hidden">
                                <div class="row justify-content-center g-0">
                                 
                                    <div class="col-lg-6 ">
                                        <div class="p-lg-5 p-4 card">
                                            <div class="text-center">
                                                <h3>Zeito Cloud System</h3>
                                                <h5 class="text-primary">Lock Screen</h5>
                                                <p class="text-muted">Enter your password to unlock the screen!</p>
                                            </div>
                                            <div class="user-thumb text-center">
                                                <?php if(session('login')['photo']){?>
                                                <img src="<?=base_url()?>/uploads/user/<?=session('login')['photo']?>" class="rounded-circle img-thumbnail avatar-lg">
                                                <?php }else{ ?>
                                                <img src="<?=base_url()?>/uploads/default-user.jpeg" class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail">
                                                <?php } ?>
                                                <h5 class="font-size-15 mt-3"><?=ucwords(session('login')['name'])?></h5>
                                            </div>
            
                                            <div class="mt-4">
                                                <form id="formData">
                                                    <div class="form-group mb-3">
                                                        <input type="hidden" name="user_name" value="<?=session('login')['user_name']?>">
                                                        <label class="form-label" for="userpassword">Password</label>
                                                        <input type="password" class="form-control" id="userpassword" name="user_pwd" placeholder="Enter password" required>
                                                    </div>
                                                    <div class="mb-2 mt-4">
                                                        <button class="btn btn-secondary w-100" type="submit">Unlock</button>
                                                    </div>
                                                </form><!-- end form -->
                                            </div>
    
                                           
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
    
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end auth page content -->

            <!-- footer -->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <p class="mb-0">&copy; <script>document.write(new Date().getFullYear())</script> Zeito. Developed by Deenz Technologies.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
        <!-- JAVASCRIPT -->
        <script src="<?=base_url()?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url()?>/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?=base_url()?>/assets/libs/node-waves/waves.min.js"></script>
        <script src="<?=base_url()?>/assets/libs/feather-icons/feather.min.js"></script>
        <script src="<?=base_url()?>/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="<?=base_url()?>/assets/js/plugins.js"></script>
        <!-- particles js -->
        <script src="<?=base_url()?>/assets/libs/particles.js/particles.js"></script>
        <!-- particles app js -->
        <script src="<?=base_url()?>/assets/js/pages/particles.app.js"></script>
        <!-- password-addon init -->
        <script src="<?=base_url()?>/assets/js/pages/password-addon.init.js"></script>
        <script>
            $(document).ready(function() {
                $('#formData').formValidation({
                    framework: 'bootstrap',
                    fields: {
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
                                setTimeout(function(){window.location.href='dashboard';},800);
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