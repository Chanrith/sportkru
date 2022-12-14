
                            <!--end navbar-collapse-->
                            <a href="#collapseMainSearchForm" class="main-search-form-toggle" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseMainSearchForm">
                                <i class="fa fa-search"></i>
                                <i class="fa fa-close"></i>
                            </a>
                            <!--end main-search-form-toggle-->
                        </nav>
                        <!--end navbar-->
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                                            <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12">
                                                <div class="form-row">
                                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                                        <label>
                                                            <input type="checkbox" name="new">
                                                            New
                                                        </label>
                                                    </div>
                                                    <!--end col-md-3-->
                                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                                        <label>
                                                            <input type="checkbox" name="used">
                                                            Used
                                                        </label>
                                                    </div>
                                                    <!--end col-md-3-->
                                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                                        <label>
                                                            <input type="checkbox" name="with_photo">
                                                            With Photo
                                                        </label>
                                                    </div>
                                                    <!--end col-md-3-->
                                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                                        <label>
                                                            <input type="checkbox" name="featured">
                                                            Featured
                                                        </label>
                                                    </div>
                                                    <!--end col-md-3-->
                                                </div>
                                            </div>
                                            <!--end col-md-6-->
                                            <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12">
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
                                            </div>
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
                    <div class="container clearfix">
                        <div class="float-left float-xs-none">
                            <h1>Furniture For Sale
                                <span class="tag">Offer</span>
                            </h1>
                            <h4 class="location">
                                <a href="#">Manhattan, NY</a>
                            </h4>
                        </div>
                        <div class="float-right float-xs-none price">
                            <div class="number">$80</div>
                            <div class="id opacity-50">
                                <strong>ID: </strong>3479
                            </div>
                        </div>
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
                <!--Gallery Carousel-->
                <section>
                    <div class="owl-carousel full-width-carousel">
                        <div class="item background-image"><img src="<?=base_url()?>/assets/img/image-24.jpg" alt="" data-hash="1"></div>
                        <div class="item background-image"><img src="<?=base_url()?>/assets/img/image-26.jpg" alt="" data-hash="2"></div>
                        <div class="item background-image"><img src="<?=base_url()?>/assets/img/image-22.jpg" alt="" data-hash="4"></div>
                        <div class="item background-image"><img src="<?=base_url()?>/assets/img/image-23.jpg" alt="" data-hash="5"></div>
                        <div class="item background-image"><img src="<?=base_url()?>/assets/img/image-20.jpg" alt="" data-hash="6"></div>
                        <div class="item background-image"><img src="<?=base_url()?>/assets/img/image-25.jpg" alt="" data-hash="3"></div>
                    </div>
                </section>
                <!--end Gallery Carousel-->
                <div class="container">
                    <div class="row flex-column-reverse flex-md-row">
                        <!--============ Listing Detail =============================================================-->
                        <div class="col-md-8">
                            <!--Description-->
                            <section>
                                <h2>Description</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit
                                    amet fermentum sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                                    per inceptos himenaeos. Vestibulum tincidunt, sapien sagittis sollicitudin dapibus,
                                    risus mi euismod elit, in dictum justo lacus sit amet dui. Sed faucibus vitae nisl
                                    at dignissim.
                                </p>
                            </section>
                            <!--end Description-->
                            <!--Details-->
                            <section>
                                <h2>Details</h2>
                                <dl class="columns-3">
                                    <dt>Date Added</dt>
                                    <dd>05.04.2017</dd>
                                    <dt>Type</dt>
                                    <dd>Offer</dd>
                                    <dt>Status</dt>
                                    <dd>Used</dd>
                                    <dt>First Owner</dt>
                                    <dd>Yes</dd>
                                    <dt>Material</dt>
                                    <dd>Wood, Leather</dd>
                                    <dt>Color</dt>
                                    <dd>White, Grey</dd>
                                    <dt>Height</dt>
                                    <dd>47cm</dd>
                                    <dt>Width</dt>
                                    <dd>203cm</dd>
                                    <dt>Length</dt>
                                    <dd>54cm</dd>
                                </dl>
                            </section>
                            <!--end Details-->
                            <!--Location-->
                            <section>
                                <h2>Location</h2>
                                <div class="map height-300px" id="map-small"></div>
                            </section>
                            <!--end Location-->
                            <!--Features-->
                            <section>
                                <h2>Features</h2>
                                <ul class="features-checkboxes columns-3">
                                    <li>Quality Wood</li>
                                    <li>Brushed Alluminium Handles</li>
                                    <li>Foam mattress</li>
                                    <li>Detachable chaise section</li>
                                    <li>3 fold pull out mechanism</li>
                                </ul>
                            </section>
                            <!--end Features-->

                            <hr>

                            <!--Similar Ads-->
                            <section>
                                <h2>Similar Ads</h2>
                                <div class="items list compact">
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

                                    <div class="center">
                                        <a href="#" class="btn btn-primary text-caps btn-framed">Show All</a>
                                    </div>
                                </div>
                                <!--end items.list.compact-->
                            </section>
                            <!--end Similar Ads-->
                        </div>
                        <!--============ End Listing Detail =========================================================-->
                        <!--============ Sidebar ====================================================================-->
                        <div class="col-md-4">
                            <aside class="sidebar">
                                <!--Author-->
                                <section>
                                    <h2>Author</h2>
                                    <div class="box">
                                        <div class="author">
                                            <div class="author-image">
                                                <div class="background-image">
                                                    <img src="<?=base_url()?>/assets/img/author-01.jpg" alt="">
                                                </div>
                                            </div>
                                            <!--end author-image-->
                                            <div class="author-description">
                                                <h3>Jane Doe</h3>
                                                <div class="rating" data-rating="4"></div>
                                                <a href="seller-detail-1.html" class="text-uppercase">Show My Listings
                                                    <span class="appendix">(12)</span>
                                                </a>
                                            </div>
                                            <!--end author-description-->
                                        </div>
                                        <hr>
                                        <dl>
                                            <dt>Phone</dt>
                                            <dd>830-247-0930</dd>
                                            <dt>Email</dt>
                                            <dd>hijane@example.com</dd>
                                        </dl>
                                        <!--end author-->
                                        <form class="form email">
                                            <div class="form-group">
                                                <label for="name" class="col-form-label">Name</label>
                                                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name">
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Email</label>
                                                <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="message" class="col-form-label">Message</label>
                                                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Hi there! I am interested in your offer ID 53951. Please give me more details."></textarea>
                                            </div>
                                            <!--end form-group-->
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </form>
                                    </div>
                                    <!--end box-->
                                </section>
                                <!--End Author-->
                            </aside>
                        </div>
                        <!--============ End Sidebar ================================================================-->
                    </div>
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->