<style>
	.categories-list li i img {
	opacity: 1 !important;
	width: 40px !important;
	height: 42px !important;
	padding:3px !important;
	}
	.category-icon{
	background:#fff !important;
	}
</style>
</nav>
</div>
<!--end container-->
</div>
<!--============ End Main Navigation ================================================================-->
<!--============ Page Title =========================================================================-->
<div class="page-title">
	<div class="container">
		<h1 class="opacity-40 center">
			<a href="#">Buy</a>, <a href="#">Sell</a> or <a href="#">Find</a> What You need
		</h1>
	</div>
	<!--end container-->
</div>
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<form class="hero-form form">
	<div class="container">
		<!--Main Form-->
		<div class="main-search-form">
			<div class="form-row">
				<div class="col-md-3 col-sm-3">
					<div class="form-group">
						<label for="what" class="col-form-label">What?</label>
						<input name="keyword" type="text" class="form-control" id="what" placeholder="What are you looking for?">
					</div>
					<!--end form-group-->
				</div>
				<!--end col-md-3-->
				<div class="col-md-3 col-sm-3">
					<div class="form-group">
						<label for="input-location" class="col-form-label">Where?</label>
						<input name="location" type="text" class="form-control" id="input-location" placeholder="Enter Location">
						<span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
					</div>
					<!--end form-group-->
				</div>
				<!--end col-md-3-->
				<div class="col-md-3 col-sm-3">
					<div class="form-group">
						<label for="category" class="col-form-label">Category?</label>
						<select name="category" id="category" data-placeholder="Select Category">
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
					<button type="submit" class="btn btn-primary width-100">Search</button>
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
<!--============ End Hero Form ======================================================================-->
<div class="background">
	<div class="background-image original-size">
		<img src="<?=base_url()?>/assets/img/hero-background-icons.jpg" alt="">
	</div>
	<!--end background-image-->
</div>
<!--end background-->
</div>
<!--end hero-wrapper-->
</header>
<section class="content">
	<section class="block">
		<div class="container">
			<h2>Services In Demand</h2>
			<ul class="categories-list clearfix">
				<li>
					<i class="category-icon">
					<img src="<?=base_url()?>/assets/icons/cab.png" alt="">
					</i>
					<h3><a href="#">Airport Cabs</a></h3>
					<!-- <div class="sub-categories">
						<a href="#">Beds</a>
						<a href="#">Sofas</a>
						<a href="#">Garden</a>
						</div> -->
				</li>
				<!--end category item-->
				<li>
					<i class="category-icon">
					<img src="<?=base_url()?>/assets/icons/airport.png" alt=""> 
					</i>
					<h3><a href="#">Cab Rentals</a></h3>
					<!-- <div class="sub-categories">
						<a href="#">Dogs</a>
						<a href="#">Cats</a>
						<a href="#">Exotic</a>
						</div> -->
				</li>
				<!--end category item-->
				<li>
					<i class="category-icon">
					<img src="<?=base_url()?>/assets/icons/heart-rate.png" alt=""> 
					</i>
					<h3><a href="#">Diagnostic Test</a></h3>
					<!-- <div class="sub-categories">
						<a href="#">Houses</a>
						<a href="#">Apartments</a>
						</div> -->
				</li>
				<!--end category item-->
				<li>
					<i class="category-icon">
					<img src="<?=base_url()?>/assets/icons/rt-pcr-machine.png" alt=""> 
					</i>
					<h3><a href="#">RT-PCR</a></h3>
					<!-- <div class="sub-categories">
						<a href="#">Find Job</a>
						<a href="#">Offer Job</a>
						</div> -->
				</li>
			</ul>
			<ul class="categories-list clearfix">
				<h2>Home Services</h2>
				<li>
					<i class="category-icon">
					<img src="<?=base_url()?>/assets/icons/house-cleaning.png" alt=""> 
					</i>
					<h3><a href="#">Home Cleaning</a></h3>
					<!-- <div class="sub-categories">
						<a href="#">New</a>
						<a href="#">Used</a>
						<a href="#">Rent</a>
						</div> -->
				</li>
				<!--end category item-->
				<li>
					<i class="category-icon">
					<img src="<?=base_url()?>/assets/icons/pest-control.png" alt=""> 
					</i>
					<h3><a href="#">Pest Control</a></h3>
					<!-- <div class="sub-categories">
						<a href="#">Apple</a>
						<a href="#">Samsung</a>
						</div> -->
				</li>
				<!--end category item-->
				<li>
					<i class="category-icon">
					<img src="<?=base_url()?>/assets/icons/animal-kingdom.png" alt=""> 
					</i>
					<h3><a href="#">Pet Services</a></h3>
					<!-- <div class="sub-categories">
						<a href="#">Photo</a>
						<a href="#">Video</a>
						<a href="#">Lenses</a>
						</div> -->
				</li>
				<!--end category item-->
				<li>
					<i class="category-icon">
					<img src="<?=base_url()?>/assets/icons/electronics.png" alt=""> 
					</i>
					<h3><a href="#">Appliance Repairs</a></h3>
					<!-- <div class="sub-categories">
						<a href="#">Ski</a>
						<a href="#">Bike</a>
						<a href="#">Hockey</a>
						</div> -->
				</li>
				<!--end category item-->
				<li>
					<i class="category-icon">
					<img src="<?=base_url()?>/assets/icons/dry.png" alt=""> 
					</i>
					<h3><a href="#">Dry Cleaning</a></h3>
					<!-- <div class="sub-categories">
						<a href="#">TV</a>
						<a href="#">Radio</a>
						<a href="#">PC</a>
						</div> -->
				</li>
				<!--end category item-->
				<li>
					<i class="category-icon">
					<img src="<?=base_url()?>/assets/icons/paint.png" alt=""> 
					</i>
					<h3><a href="#">Painting</a></h3>
					<!-- <div class="sub-categories">
						<a href="#">Shirts</a>
						<a href="#">Trousers</a>
						</div> -->
				</li>
				<!--end category item-->
				<li>
					<i class="category-icon">
					<img src="<?=base_url()?>/assets/icons/assets.png" alt=""> 
					</i>
					<h3><a href="#">Property Management</a></h3>
					<!-- <div class="sub-categories">
						<a href="#">Fantasy</a>
						<a href="#">History</a>
						<a href="#">Sci-Fi</a>
						</div> -->
				</li>
			</ul>
			<ul class="categories-list clearfix">
				<h2>Partner Deals</h2>
				<li>
					<i class="category-icon">
					<img src="<?=base_url()?>/assets/icons/air-conditioning.png" alt=""> 
					</i>
					<h3><a href="#">Music</a></h3>
					<div class="sub-categories">
						<a href="#">Rock</a>
						<a href="#">Techno</a>
						<a href="#">Folk</a>
					</div>
				</li>
			</ul>
			<!--end categories-list-->
		</div>
		<!--end container-->
	</section>
	<section class="block" style="background: #fff;">
		<div class="container">
			<!--============ Section Title===================================================================-->
			<div class="section-title clearfix">
				<div class="float-xl-left float-md-left float-sm-none">
					<h2>Recent Listings</h2>
				</div>
				<div class="float-xl-right float-md-right float-sm-none">
					<select name="categories" id="categories" class="small width-200px" data-placeholder="Category" >
						<option value="">Category</option>
						<option value="1">Computers</option>
						<option value="2">Real Estate</option>
						<option value="3">Cars & Motorcycles</option>
						<option value="4">Furniture</option>
						<option value="5">Pets & Animals</option>
					</select>
					<select name="sorting" id="sorting" class="small width-200px" data-placeholder="Default Sorting" >
						<option value="">Default Sorting</option>
						<option value="1">Newest First</option>
						<option value="2">Oldest First</option>
						<option value="3">Lowest Price First</option>
						<option value="4">Highest Price First</option>
					</select>
				</div>
			</div>
			<!--============ Items ==========================================================================-->
			<div class="items masonry grid-xl-4-items grid-lg-3-items grid-md-2-items">
				<div class="item">
					<div class="ribbon-featured">Featured</div>
					<!--end ribbon-->
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Home & Decor</a>
								<a href="single-listing-1.html" class="title">Furniture for sale</a>
								<span class="tag">Offer</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-01.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">Manhattan, NY</a>
						</h4>
						<div class="price">$80</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>02.05.2017
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>Jane Doe
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
						</div>
						<!--end description-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Education</a>
								<a href="single-listing-1.html" class="title">Creative Course</a>
								<span class="tag">Offer</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-02.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">Nashville, TN</a>
						</h4>
						<div class="price">$125</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>28.04.2017
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>Peter Browner
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>Proin at tortor eros. Phasellus porta nec elit non lacinia. Nam bibendum erat at leo faucibus vehicula. Ut laoreet porttitor risus, eget suscipit tellus tincidunt sit amet. </p>
						</div>
						<!--end description-->
						<div class="additional-info">
							<ul>
								<li>
									<figure>Start Date</figure>
									<aside>25.06.2017 09:00</aside>
								</li>
								<li>
									<figure>Length</figure>
									<aside>2 months</aside>
								</li>
								<li>
									<figure>Bedrooms</figure>
									<aside>3</aside>
								</li>
							</ul>
						</div>
						<!--end addition-info-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Adventure</a>
								<a href="single-listing-1.html" class="title">Into The Wild</a>
								<span class="tag">Ad</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-03.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">Seattle, WA</a>
						</h4>
						<div class="price">$1,560</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>21.04.2017
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>Peak Agency
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>Nam eget ullamcorper massa. Morbi fringilla lectus nec lorem tristique gravida</p>
						</div>
						<!--end description-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Real Estate</a>
								<a href="single-listing-1.html" class="title">Luxury Apartment</a>
								<span class="tag">Offer</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-04.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">Greeley, CO</a>
						</h4>
						<div class="price">$75,000</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>13.03.2017
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>Hills Estate
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
						</div>
						<!--end description-->
						<div class="additional-info">
							<ul>
								<li>
									<figure>Area</figure>
									<aside>368m<sup>2</sup></aside>
								</li>
								<li>
									<figure>Bathrooms</figure>
									<aside>2</aside>
								</li>
								<li>
									<figure>Bedrooms</figure>
									<aside>3</aside>
								</li>
								<li>
									<figure>Garage</figure>
									<aside>1</aside>
								</li>
							</ul>
						</div>
						<!--end addition-info-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Architecture</a>
								<a href="single-listing-1.html" class="title">We'll Redesign Your Apartment</a>
								<span class="tag">Offer</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-05.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">Greeley, CO</a>
						</h4>
						<div class="price">
							<span class="appendix">From</span>
							$200
						</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>13.03.2017
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>XL Designers
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
						</div>
						<!--end description-->
						<div class="additional-info">
							<ul>
								<li>
									<figure>Area</figure>
									<aside>368m<sup>2</sup></aside>
								</li>
								<li>
									<figure>Bathrooms</figure>
									<aside>2</aside>
								</li>
								<li>
									<figure>Bedrooms</figure>
									<aside>3</aside>
								</li>
							</ul>
						</div>
						<!--end addition-info-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<div class="item">
					<div class="ribbon-featured">Featured</div>
					<!--end ribbon-->
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Jobs</a>
								<a href="single-listing-1.html" class="title">Seeking for a Job</a>
								<span class="tag">Demand</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-06.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">Delavan, IL</a>
						</h4>
						<div class="price">$1,200</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>10.03.2017
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>Aurelio Thomas
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
						</div>
						<!--end description-->
						<div class="additional-info">
							<ul>
								<li>
									<figure>Degree</figure>
									<aside>Bachelor???s</aside>
								</li>
								<li>
									<figure>Category</figure>
									<aside>Art & Design</aside>
								</li>
								<li>
									<figure>Experience</figure>
									<aside>5 years</aside>
								</li>
								<li>
									<figure>Language</figure>
									<aside>English, German</aside>
								</li>
							</ul>
						</div>
						<!--end addition-info-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Pets & Animals</a>
								<a href="single-listing-1.html" class="title">Baby Cats</a>
								<span class="tag">Offer</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-07.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">Detroit, MI</a>
						</h4>
						<div class="price">
							<span class="appendix">From</span>
							$80
						</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>23.02.2017
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>Detroit Pet Center
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>Pellentesque ullamcorper justo quis bibendum
								consequat. Integer id euismod lacus, facilisis faucibus urna.
							</p>
						</div>
						<!--end description-->
						<div class="additional-info">
							<ul>
								<li>
									<figure>Age</figure>
									<aside>2 weeks</aside>
								</li>
							</ul>
						</div>
						<!--end addition-info-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Mobiles</a>
								<a href="single-listing-1.html" class="title">Used Smartphone</a>
								<span class="tag">Offer</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-08.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">West Roxbury, MA</a>
						</h4>
						<div class="price">$300</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>28.02.2017
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>Gloria A. Crawford
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>Vestibulum congue at justo semper dignissim. Pellentesque ullamcorper justo quis bibendum
								consequat. Integer id euismod lacus, facilisis faucibus urna.
							</p>
						</div>
						<!--end description-->
						<div class="additional-info">
							<ul>
								<li>
									<figure>Status</figure>
									<aside>Used</aside>
								</li>
								<li>
									<figure>Brand</figure>
									<aside>Samsung</aside>
								</li>
							</ul>
						</div>
						<!--end addition-info-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Cars</a>
								<a href="single-listing-1.html" class="title">Offroad Car</a>
								<span class="tag">Offer</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-09.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">Nehalem, OR</a>
						</h4>
						<div class="price">$30,000</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>14.01.2017
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>Leonardo
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>Nam eget imperdiet massa. Cras dolor nulla, tristique eu nisl ut, venenatis volutpat massa.
								Integer imperdiet finibus ipsum vitae scelerisque.
							</p>
						</div>
						<!--end description-->
						<div class="additional-info">
							<ul>
								<li>
									<figure>Brand</figure>
									<aside>Jeep</aside>
								</li>
								<li>
									<figure>Engine</figure>
									<aside>Diesel</aside>
								</li>
								<li>
									<figure>Mileage</figure>
									<aside>28,630</aside>
								</li>
							</ul>
						</div>
						<!--end addition-info-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<a href="submit.html" class="item call-to-action">
					<div class="wrapper">
						<div class="title">
							<i class="fa fa-plus-square-o"></i>
							Submit Your Ad
						</div>
					</div>
				</a>
				<!--end item-->
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Clothing</a>
								<a href="single-listing-1.html" class="title">High Boots</a>
								<span class="tag">Offer</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-10.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">Raleigh, NC</a>
						</h4>
						<div class="price">$67</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>05.01.2017
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>Bobby
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>Nam pulvinar mollis tortor, eu lobortis mauris luctus non. Integer lobortis sapien enim,
								ut imperdiet leo faucibus id. Fusce tincidunt nunc elit, at varius erat rutrum vitae.
							</p>
						</div>
						<!--end description-->
						<div class="additional-info">
							<ul>
								<li>
									<figure>Status</figure>
									<aside>Used</aside>
								</li>
								<li>
									<figure>Material</figure>
									<aside>Genuine Leather</aside>
								</li>
								<li>
									<figure>Size</figure>
									<aside>10</aside>
								</li>
							</ul>
						</div>
						<!--end addition-info-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Books & Magazines</a>
								<a href="single-listing-1.html" class="title">Will Buy "Behind the Sea" Book</a>
								<span class="tag">Demand</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-11.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">Long Beach, CA</a>
						</h4>
						<div class="price">$30</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>02.01.2017
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>Patty McAlexander
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>Mauris nisi ligula, pulvinar eu commodo eu, semper id quam. In vitae purus bibendum,
								mattis ex nec, eleifend diam. Cras at vehicula metus. Sed elementum lectus ut aliquet vehicula.
							</p>
						</div>
						<!--end description-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Cameras</a>
								<a href="single-listing-1.html" class="title">Retro Camera</a>
								<span class="tag">Offer</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-12.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">Bethany, WV</a>
						</h4>
						<div class="price">$120</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>20.12.2016
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>Paula Nelson
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>In vitae purus bibendum, mattis ex nec, eleifend diam. Cras at vehicula metus.
								Sed elementum lectus ut aliquet vehicula.
							</p>
						</div>
						<!--end description-->
						<div class="additional-info">
							<ul>
								<li>
									<figure>Brand</figure>
									<aside>Nikon</aside>
								</li>
								<li>
									<figure>Model</figure>
									<aside>F 35mm SLR </aside>
								</li>
							</ul>
						</div>
						<!--end addition-info-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Food</a>
								<a href="single-listing-1.html" class="title">Fresh Bio Vegetables</a>
								<span class="tag">Offer</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-13.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">Grand Rapids, MI</a>
						</h4>
						<div class="price">
							<span class="appendix">From</span>
							$120
						</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>20.12.2016
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>Paula Nelson
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>In vitae purus bibendum, mattis ex nec, eleifend diam. Cras at vehicula metus.
								Sed elementum lectus ut aliquet vehicula.
							</p>
						</div>
						<!--end description-->
						<div class="additional-info">
							<ul>
								<li>
									<figure>Brand</figure>
									<aside>Nikon</aside>
								</li>
								<li>
									<figure>Model</figure>
									<aside>F 35mm SLR </aside>
								</li>
							</ul>
						</div>
						<!--end addition-info-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Restaurants</a>
								<a href="single-listing-1.html" class="title">XL Baron Burger</a>
								<span class="tag">Ad</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-14.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">Burbank, CA</a>
						</h4>
						<div class="price">$120</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>18.12.2016
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>Burger Barons
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>Vestibulum sodales turpis eget venenatis iaculis. Nam pulvinar mollis tortor, eu
								lobortis mauris luctus non. Integer lobortis sapien enim, ut imperdiet leo faucibus id.
							</p>
						</div>
						<!--end description-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<div class="item">
					<div class="ribbon-featured">Featured</div>
					<!--end ribbon-->
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Photo & Camera</a>
								<a href="single-listing-1.html" class="title">Professional Photo Shooting</a>
								<span class="tag">Offer</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-15.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">Cambridge, MA</a>
						</h4>
						<div class="price">
							<span class="appendix">From</span>
							$350
						</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>12.11.2016
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>Kate's Photo
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>Morbi lectus massa, consequat blandit eleifend et, venenatis ut orci.
								Vestibulum finibus metus at lacus egestas pulvinar.
							</p>
						</div>
						<!--end description-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Sport</a>
								<a href="single-listing-1.html" class="title">Urban Bike</a>
								<span class="tag">Offer</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-16.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">Freeport, TX</a>
						</h4>
						<div class="price">$140</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>06.11.2016
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>Laura
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>Morbi egestas elit et orci interdum, ac tincidunt diam feugiat. Aliquam erat volutpat.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</p>
						</div>
						<!--end description-->
						<div class="additional-info">
							<ul>
								<li>
									<figure>Brand</figure>
									<aside>Trek</aside>
								</li>
								<li>
									<figure>Size</figure>
									<aside>Large</aside>
								</li>
							</ul>
						</div>
						<!--end addition-info-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Real Estate</a>
								<a href="single-listing-1.html" class="title">Luxury Villa</a>
								<span class="tag">Offer</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-17.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">St Joe, IN </a>
						</h4>
						<div class="price">$360,000</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>17.10.2016
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>Homeland Estate
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>nteger imperdiet finibus ipsum vitae scelerisque. Vestibulum sodales turpis eget venenatis iaculis.
								Nam pulvinar mollis tortor, eu lobortis mauris luctus non. Integer lobortis sapien enim
							</p>
						</div>
						<!--end description-->
						<div class="additional-info">
							<ul>
								<li>
									<figure>Area</figure>
									<aside>5,620m<sup>2</sup></aside>
								</li>
								<li>
									<figure>Size</figure>
									<aside>Large</aside>
								</li>
								<li>
									<figure>Bedrooms</figure>
									<aside>4</aside>
								</li>
								<li>
									<figure>Bathrooms</figure>
									<aside>3</aside>
								</li>
								<li>
									<figure>Garages</figure>
									<aside>4</aside>
								</li>
							</ul>
						</div>
						<!--end addition-info-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Cars</a>
								<a href="single-listing-1.html" class="title">Car Wheels</a>
								<span class="tag">Offer</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-18.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">Bryan, TX</a>
						</h4>
						<div class="price">
							<span class="appendix">From</span>
							$140
						</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>12.10.2016
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>George R. Mund
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>Duis tempor velit vel lectus viverra, et finibus justo semper. Morbi egestas elit et
								orci interdum, ac tincidunt diam feugiat. Aliquam erat volutpat. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit
							</p>
						</div>
						<!--end description-->
						<div class="additional-info">
							<ul>
								<li>
									<figure>Size</figure>
									<aside>From 17"</aside>
								</li>
								<li>
									<figure>Material</figure>
									<aside>Alloy</aside>
								</li>
							</ul>
						</div>
						<!--end addition-info-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<h3>
								<a href="#" class="tag category">Computer</a>
								<a href="single-listing-1.html" class="title">Will Buy MacBook Pro</a>
								<span class="tag">Demand</span>
							</h3>
							<a href="single-listing-1.html" class="image-wrapper background-image">
							<img src="<?=base_url()?>/assets/img/image-19.jpg" alt="">
							</a>
						</div>
						<!--end image-->
						<h4 class="location">
							<a href="#">Elmsford, NJ</a>
						</h4>
						<div class="price">
							<span class="appendix">Max</span>
							$2,500
						</div>
						<div class="meta">
							<figure>
								<i class="fa fa-calendar-o"></i>10.10.2016
							</figure>
							<figure>
								<a href="#">
								<i class="fa fa-user"></i>Timothy
								</a>
							</figure>
						</div>
						<!--end meta-->
						<div class="description">
							<p>Quisque in tincidunt quam, quis blandit orci. Proin semper leo mi, efficitur lacinia nunc blandit ac.
								Vestibulum congue at justo semper dignissim.
							</p>
						</div>
						<!--end description-->
						<div class="additional-info">
							<ul>
								<li>
									<figure>Screen Size</figure>
									<aside>17"</aside>
								</li>
							</ul>
						</div>
						<!--end addition-info-->
						<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
					</div>
				</div>
				<!--end item-->
			</div>
			<!--============ End Items ======================================================================-->
			<div class="center">
				<a href="#" class="btn btn-primary btn-framed btn-rounded">Load More</a>
			</div>
		</div>
		<!--end container-->
	</section>
	<!--end block-->
</section>
<!--end content-->