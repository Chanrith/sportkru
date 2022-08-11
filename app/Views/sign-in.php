<style>
   input::-webkit-outer-spin-button,
   input::-webkit-inner-spin-button {
   -webkit-appearance: none;
   margin: 0;right: r;
}
</style>
<!--end navbar-collapse-->
<a href="#collapseMainSearchForm" class="main-search-form-toggle" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseMainSearchForm">
<i class="fa fa-search"></i>
<i class="fa fa-close"></i>
</a>
<!--end main-search-form-toggle-->
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
<!--============ End Main Navigation ================================================================-->    
<!--============ Hero Form ==========================================================================-->
<div class="collapse" id="collapseMainSearchForm">
	<form class="hero-form form">
		<div class="container">
			<!--Main Form-->    
			<div class="main-search-form">
				<div class="form-row">
					<div class="col-md-3 col-sm-3">
						<div class="form-group">
							<label for="what" class="col-form-label">What?</label>
							<input name="keyword" type="text" class="form-control small" id="what" placeholder="What are you looking for?">
						</div>
						<!--end form-group-->
					</div>
					<!--end col-md-3-->
					<div class="col-md-3 col-sm-3">
						<div class="form-group">
							<label for="input-location" class="col-form-label">Where?</label>
							<input name="location" type="text" class="form-control small" id="input-location" placeholder="Enter Location">
							<span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
						</div>
						<!--end form-group-->
					</div>
					<!--end col-md-3-->
					<div class="col-md-3 col-sm-3">
						<div class="form-group">
							<label for="category" class="col-form-label">Category?</label>
							<select name="category" id="category" class="small" data-placeholder="Select Category">
								<option value="">Select Category</option>
								<option value="1">Computers</option>
								<option value="2">Real Estate</option>
								<option value="3">Cars & Motorcycles</option>
								<option value="4">Furniture</option>
								<option value="5">Pets & Animals</option>
							</select>
						</div>
						<!--end form-group-->
					</div>
					<!--end col-md-3-->
					<div class="col-md-3 col-sm-3">
						<button type="submit" class="btn btn-primary width-100 small">Search</button>
					</div>
					<!--end col-md-3-->
				</div>
				<!--end form-row-->
			</div>
			<!--end main-search-form-->
			<!--Alternative Form-->
			<div class="alternative-search-form">
				<a href="#collapseAlternativeSearchForm" class="icon" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseAlternativeSearchForm"><i class="fa fa-plus"></i>More Options</a>
				<div class="collapse" id="collapseAlternativeSearchForm">
					<div class="wrapper">
						<div class="form-row">
							<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 d-xs-grid d-flex align-items-center justify-content-between">
								<label>
								<input type="checkbox" name="new">
								New
								</label>
								<label>
								<input type="checkbox" name="used">
								Used
								</label>
								<label>
								<input type="checkbox" name="with_photo">
								With Photo
								</label>
								<label>
								<input type="checkbox" name="featured">
								Featured
								</label>
							</div>
							<!--end col-xl-6-->
							<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
								<div class="form-row">
									<div class="col-md-4 col-sm-4">
										<div class="form-group">
											<input name="min_price" type="text" class="form-control small" id="min-price" placeholder="Minimal Price">
											<span class="input-group-addon small">$</span>
										</div>
										<!--end form-group-->
									</div>
									<!--end col-md-4-->
									<div class="col-md-4 col-sm-4">
										<div class="form-group">
											<input name="max_price" type="text" class="form-control small" id="max-price" placeholder="Maximal Price">
											<span class="input-group-addon small">$</span>
										</div>
										<!--end form-group-->
									</div>
									<!--end col-md-4-->
									<div class="col-md-4 col-sm-4">
										<div class="form-group">
											<select name="distance" id="distance" class="small" data-placeholder="Distance" >
												<option value="">Distance</option>
												<option value="1">1km</option>
												<option value="2">5km</option>
												<option value="3">10km</option>
												<option value="4">50km</option>
												<option value="5">100km</option>
											</select>
										</div>
										<!--end form-group-->
									</div>
									<!--end col-md-3-->
								</div>
								<!--end form-row-->
							</div>
							<!--end col-xl-6-->
						</div>
						<!--end row-->
					</div>
					<!--end wrapper-->
				</div>
				<!--end collapse-->
			</div>
			<!--end alternative-search-form-->
		</div>
		<!--end container-->
	</form>
	<!--end hero-form-->
</div>
<!--end collapse-->
<!--============ End Hero Form ======================================================================-->
<!--============ Page Title =========================================================================-->
<div class="page-title">
	<div class="container">
		<h1>Sign In</h1>
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
				<div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
					<form class="form clearfix">
						<!--end form-group-->
                        <div class="form-group">
							<label for="email" class="col-form-label required">Mobile</label>
							<input name="email" type="number" class="form-control" id="email" placeholder="Your Mobile" required>
						</div>
						<!--end form-group-->
						<div class="d-flex justify-content-end">
							<!-- <label>
							<input type="checkbox" name="newsletter" value="1">
							Receive Newsletter
							</label> -->
							<button type="submit" class="btn btn-primary">Sign In</button>
						</div>
					</form>
					<hr>
					<p>
						By clicking "Register" button, you agree with our <a href="#" class="link">Terms & Conditions.</a>
					</p>
				</div>
				<!--end col-md-6-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</section>
	<!--end block-->
</section>
<!--end content-->