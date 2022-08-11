<style>
 input::-webkit-outer-spin-button, input::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0;right: r;}
.form label.error {position: absolute;left:auto !important;}.hero .page-title{padding-top: 3rem;padding-bottom: 0rem;}
.breadcrumb{display:none;}
.hero:after{background-image: url(../img/hero-overlay.png);background-size: contain;content: "";width: 100%;height:0rem;bottom: 0;}
.hero .hero-wrapper{padding-bottom: 3rem;}
.form-check {padding-left:0px;}
.content{margin-bottom:0px !important;}
.navbar-nav,.footer,.navbar-brand{display:none;}
.hero .main-navigation .navbar {border-bottom:0px; padding:0;}
.items:not(.selectize-input).list .item .detail {bottom: 68px;}
@media (max-width: 767px){
.items:not(.selectize-input).list .item .detail {bottom:2rem;}}
.fa-check{ padding: 5px;background: #3c8ef5;color: #fff;border-radius: 11px;font-size: 8px;}
.items:not(.selectize-input).list .item h3 .tag:not(.category) {border:none;}
.items:not(.selectize-input).list .item .description p { width: 100%;}
.help-block {color:red;}
.navbar-toggler{display:none;}	
.modal-header .close {
    padding: 5px 1px;
    margin: 0rem 0rem 0rem auto;}
.hero .hero-wrapper {
    padding-bottom: 0rem;}
	.hero .page-title{
		display: none;
	}
	a:hover{color:black !important;}
</style>
</nav>
<!--end navbar-->
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
	<li class="breadcrumb-item"><a href="#">Library</a></li>
	<li class="breadcrumb-item active">Data</li>
</ol>
<!--end breadcrumb-->
</div>
<!--end container-->
</div>
<!--============ Page Title =========================================================================-->
<div class="page-title">
	<div class="container">
		<h1 class="text-center">Register</h1>
	</div>
	<!--end container-->
</div>
<!--============ End Page Title =====================================================================-->
<div class="background"></div>
<!--end background-->
</div>
<!--end hero-wrapper-->
</header>
<!--end hero-->
<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<section class="content">
	<section class="block">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6 col-lg-5 col-md-6 col-sm-8 p-4" style="background:#fff;">
					<form class="form clearfix" id="addForm">
					    <h2 class="text-center mb-4">Are you a coach?</h2> 
                        <h6 class="text-center mb-4" style="font-size: 16px;"> <a href="" class="link">Sign up</a></h6>
					    <hr>
                        <div class="row">
						<div class="form-group col-xl-6">
							<label for="name" class="col-form-label required">First Name</label>
							<input name="first_name" type="text" class="form-control p-3" id="" placeholder="First Name" >
						</div>
                        <div class="form-group col-xl-6">
							<label for="name" class="col-form-label required">Last Name</label>
							<input name="last_name" type="text" class="form-control p-3" id="name" placeholder="Last Name" >
						</div>
                        </div>
						<!--end form-group-->
                        <div class="row">
						<div class="form-group col-xl-12">
							<label for="email" class="col-form-label required">Email</label>
							<input name="email" type="email" class="form-control p-3"  placeholder="Your Email" >
						</div>
                        <div class="form-group col-xl-12">
							<label for="email" class="col-form-label required">Mobile</label>
							<input name="mobile_number" type="number" class="form-control p-3" id="" placeholder="Your Mobile">
						</div>
                        </div>
						<!--end form-group-->
						<div class="text-center">
							<button type="submit" class="btn p-3 mb-4 btn-primary">Register Account</button>
						</div>
					</form>
					<!-- <hr>
					<p>
						By clicking "Register" button, you agree with our <a href="#" class="link">Terms & Conditions.</a>
					</p> -->
					<span class="" style="position: absolute;top: -40px;left:4px;" ><a href="<?=base_url()?>" class=""><i class='fa fa-chevron-left pr-2'></i>Back to home</a></span>
				</div>
				<!--end col-md-6-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</section>
	<!--end block-->
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
    <div class="modal-dialog" style="padding-top:110px;">
        <div class="modal-content">
            <div class="modal-header" style="border:none;">
                <!-- <h5 class="modal-title" id="exampleModalLabel" style="font-size:16px;">Sports Type</h5> -->
                <button type="button" class="close" data-dismiss="modal" onclick="location.reload();" style="opacity: 1;" aria-label="Close">
                <span style="font-size: 17px; background: red;padding: 2px 9px; color: #fff;" aria-hidden="true">&times;<span>
                </button>
            </div>
            <div class="modal-body text-center">
				<img width="100px" class="mb-4" src="<?=base_url()?>/assets/img/clipart523208.png" alt="">
                <h5 class="pb-4" style="font-size: 22px;">Thank you</h5>
				<h6 style="font-size:13px;">We'll contact you and update your details on website after manual verification.</h6>
                <div>
                    <div class="form-group mb-0">
                        <div class="form-group mb-0">
                            <div class="modal-footer pl-0" style="border:none;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end content-->
<script>
	$(document).ready(function() {
	$('#addForm').formValidation({
	       framework: 'bootstrap',
	       fields: {
	           first_name: {
	               validators: {
	                   notEmpty: {
	                       message: 'First name is required'
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
	           mobile_number: {
	               validators: {
	                   notEmpty: {
	                       message: 'Mobile number is required'
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
	       }
	})
    .on('success.form.fv', function(e) {
		// Prevent form submission
		e.preventDefault();
		var form = document.querySelector('#addForm');
		var formData = new FormData(form);
		$.ajax({
            type:'POST',
            url:'<?=base_url()?>/home/saveRegister',
            data:formData,
			cache:false,
			contentType: false,
			processData: false, // serializes the form's elements.
            dataType:'json',
            success:function(result)
			{ 
				if(result==false)
				{
					toastr.warning('Mobile number already exist','Already Exist');
					getAjaxList();
				}
				else if(result==true)
				{
					//  toastr.success('Register successfully','Success');
					 $('#exampleModal').modal('show');
				}
			}
		});
    });
});
</script>