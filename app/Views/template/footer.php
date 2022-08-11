<footer class="footer">
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<a href="#" class="brand">
					<img src="<?=base_url()?>/assets/img/logo.png" alt="">
					</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet
						fermentum sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
					</p>
				</div>
				<!--end col-md-5-->
				<div class="col-md-3">
					<h2>Navigation</h2>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<nav>
								<ul class="list-unstyled">
									<li>
										<a href="<?=base_url()?>">Home</a>
									</li>
									<li>
										<a href="<?=base_url()?>/list">Listing</a>
									</li>
									<li>
										<a href="<?=base_url()?>/contact">Contact</a>
									</li>
									<li>
										<a href="<?=base_url()?>/sign-in">Sign In</a>
									</li>
									<li>
										<a href="<?=base_url()?>/register">Register</a>
									</li>
									<!-- <li>
										<a href="#">Submit Ad</a>
									</li> -->
								</ul>
							</nav>
						</div>
						<!-- <div class="col-md-6 col-sm-6">
							<nav>
								<ul class="list-unstyled">
									<li>
										<a href="#">My Ads</a>
									</li>
									<li>
										<a href="#">Sign In</a>
									</li>
									<li>
										<a href="#">Register</a>
									</li>
								</ul>
							</nav>
						</div> -->
					</div>
				</div>
				<!--end col-md-3-->
				<div class="col-md-4">
					<h2>Contact</h2>
					<address>
						<figure>
							124 Abia Martin Drive<br>
							New York, NY 10011
						</figure>
						<br>
						<strong>Email:</strong> <a href="#">hello@example.com</a>
						<br>
						<strong>Skype: </strong> Craigs
						<br>
						<br>
						<a href="<?=base_url()?>/contact" class="btn btn-primary text-caps btn-framed">Contact Us</a>
					</address>
				</div>
				<!--end col-md-4-->
			</div>
			<!--end row-->
		</div>
		<div class="background">
			<div class="background-image original-size">
				<img src="<?=base_url()?>/assets/img/footer-background-icons.jpg" alt="">
			</div>
			<!--end background-image-->
		</div>
		<!--end background-->
	</div>
</footer>
<!--end footer-->
</div>
<!--end page-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=YOUR_API_KEY&amp;libraries=places"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&amp;libraries=places"></script>
<script src='<?=base_url()?>/assets/js/selectize.min.js'></script>
<script src="<?=base_url()?>/assets/js/masonry.pkgd.min.js"></script>
<script src="<?=base_url()?>/assets/js/icheck.min.js"></script>
<script src="<?=base_url()?>/assets/js/owl.carousel.min.js"></script>
<!-- <script src="<?=base_url()?>/assets/js/jquery.validate.min.js"></script> -->
<script src="<?=base_url()?>/assets/js/custom.js"></script>
<script>
	<?php if($menu=="Details"){ ?>
	
	   var latitude = 51.511971;
	   var longitude = -0.137597;
	   var markerImage = "<?=base_url()?>/assets/img/map-marker.png";
	   var mapTheme = "light";
	   var mapElement = "map-small";
	   simpleMap(latitude, longitude, markerImage, mapTheme, mapElement);
	<?php }  ?>
	<?php  if($menu=="Contact Us"){ ?>
	     var latitude = 51.511971;
	   var longitude = -0.137597;
	   var markerImage = "<?=base_url()?>/assets/img/map-marker.png";
	   var mapTheme = "light";
	   var mapElement = "map-contact";
	   simpleMap(latitude, longitude, markerImage, mapTheme, mapElement);
	<?php  } ?>     
</script> 
</body>
</html>