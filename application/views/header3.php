<?php
	$this->load->view('header');
?>
<!-- menu start here -->
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-xs-12">
			<nav class="navbar" id="menu">
				<div class="navbar-header">
					<span class="menutext visible-xs">Menu</span>
					<button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse padd0">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">HOME</a>
							<div class="dropdown-menu animated fadeInDown">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li>
											<a href="homepage1.html">Homepage Ver 1</a>
										</li>
										<li>
											<a href="homepage2.html">Hoempage Ver 2</a>
										</li>
										<li>
											<a href="index-2.html">Homepage Ver 3</a>
										</li>
										<li>
											<a href="header2.html">Header Footer Ver 1</a>
										</li>
										<li>
											<a href="header3.html">Header Footer Ver 2</a>
										</li>
										<li>
											<a href="header4.html">Header Footer Ver 3</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">JOBS</a>
							<div class="dropdown-menu animated fadeInDown">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li>
											<a href="jobs.html">job grid view</a>
										</li>
										<li>
											<a href="jobs-list-view1.html">Job List View Ver 1</a>
										</li>
										<li>
											<a href="jobs-list-view2.html">Job List View Ver 2</a>
										</li>
										<li>
											<a href="jobs-list-view.html">Job List View Ver 3</a>
										</li>
										<li>
											<a href="list-detail-page.html">Job Detail Ver 1</a>
										</li>
										<li>
											<a href="jobs-detail.html">Job Detail Ver 2</a>
										</li>
										<li>
											<a href="apply-job-form.html">Job Apply Form</a>
										</li>
										<li>
											<a href="search_page.html">Search Page Ver 1</a>
										</li>
										<li>
											<a href="jobs-search.html">Search Page Ver 2</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">CANDIDATES</a>
							<div class="dropdown-menu animated fadeInDown">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li>
											<a href="candidate-grid-view.html">candidate grid view</a>
										</li>
										<li>
											<a href="candidate-list-view.html">candidate list view</a>
										</li>
										<li>
											<a href="candidate-single-view.html">candidate single view</a>
										</li>
										<li>
											<a href="my-profile.html">my profile</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">EMPLOYER</a>
							<div class="dropdown-menu animated fadeInDown">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li>
											<a href="company-page.html">company Profile</a>
										</li>
										<li>
											<a href="employers.html">employers LIST</a>
										</li>
										<li>
											<a href="employer-detail.html">employer detail</a>
										</li>
										<li>
											<a href="submit-job.html">Submit Job</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">BLOG</a>
							<div class="dropdown-menu animated fadeInDown">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li>
											<a href="blog.html">blog</a>
										</li>
										<li>
											<a href="blog-detail.html">blog detail</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">PAGES
								<span class="fa fa-angle-down"></span>
							</a>
							<div class="dropdown-menu animated fadeInDown">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li>
											<a href="about.html">About Us</a>
										</li>
										<li>
											<a href="login.html">Login</a>
										</li>
										<li>
											<a href="register.html">Register</a>
										</li>
										<li>
											<a href="contact.html">Contact us</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</nav>	
		</div>
	</div>
</div>
<!-- menu end here -->
<!-- slider start here -->
	<div class="slideshow owl-carousel">
		<div class="item">
			<img src="images/slider-1.jpg" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
					<div class="slider-caption">
						<div class="off"></div>
						<h1>Find Your Job</h1>
						<div class="col-md-4 col-sm-4 col-xs-12 paddleft">
							<select class="selectpicker form-control" name="allcate">
								<option value="1">All Category</option>
								<option value="0">Category 1</option>
								<option value="0">Category 2</option>
								<option value="0">Category 3</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="selectpicker form-control" name=	"location">
								<option value="1">Select Location</option>
								<option value="0">Location 1</option>
								<option value="0">Location 2</option>
								<option value="0">Location 3</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 paddright">
							<div class="input-group">
								<input name="s" class="form-control" value="" placeholder="Search" type="text">
								<span>
									<button type="submit" class="btnsrch" onclick="location.href='jobs.html'"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
						<div class="center">
							<button class="btn-default">ADVANCE JOB SEARCH <i class="fa fa-plus-square-o" aria-hidden="true"></i>
							</button>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="images/slider-1.jpg" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
					<div class="slider-caption">
						<div class="off"></div>
						<h1>Find Your Job</h1>
						<div class="col-md-4 col-sm-4 col-xs-12 paddleft">
							<select class="selectpicker form-control" name="allcate">
								<option value="1">All Category</option>
								<option value="0">Category 1</option>
								<option value="0">Category 2</option>
								<option value="0">Category 3</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="selectpicker form-control" name=	"location">
								<option value="1">Select Location</option>
								<option value="0">Location 1</option>
								<option value="0">Location 2</option>
								<option value="0">Location 3</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 paddright">
							<div class="input-group">
								<input name="s" class="form-control" value="" placeholder="Search" type="text">
								<span>
									<button type="submit" class="btnsrch" onclick="location.href='jobs.html'"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
						<div class="center">
							<button class="btn-default">ADVANCE JOB SEARCH <i class="fa fa-plus-square-o" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="item">
			<img src="images/slider-1.jpg" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
					<div class="slider-caption">
						<div class="off"></div>
						<h1>Find Your Job</h1>
						<div class="col-md-4 col-sm-4 col-xs-12 paddleft">
							<select class="selectpicker form-control" name="allcate">
								<option value="1">All Category</option>
								<option value="0">Category 1</option>
								<option value="0">Category 2</option>
								<option value="0">Category 3</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="selectpicker form-control" name=	"location">
								<option value="1">Select Location</option>
								<option value="0">Location 1</option>
								<option value="0">Location 2</option>
								<option value="0">Location 3</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 paddright">
							<div class="input-group">
								<input name="s" class="form-control" value="" placeholder="Search" type="text">
								<span>
									<button type="submit" class="btnsrch" onclick="location.href='jobs.html'"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
						<div class="center">
							<button class="btn-default">ADVANCE JOB SEARCH <i class="fa fa-plus-square-o" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="item">
			<img src="images/slider-1.jpg" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
					<div class="slider-caption">
						<div class="off"></div>
						<h1>Find Your Job</h1>
						<div class="col-md-4 col-sm-4 col-xs-12 paddleft">
							<select class="selectpicker form-control" name="allcate">
								<option value="1">All Category</option>
								<option value="0">Category 1</option>
								<option value="0">Category 2</option>
								<option value="0">Category 3</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="selectpicker form-control" name=	"location">
								<option value="1">Select Location</option>
								<option value="0">Location 1</option>
								<option value="0">Location 2</option>
								<option value="0">Location 3</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 paddright">
							<div class="input-group">
								<input name="s" class="form-control" value="" placeholder="Search" type="text">
								<span>
									<button type="submit" class="btnsrch" onclick="location.href='jobs.html'"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
						<div class="center">
							<button class="btn-default">ADVANCE JOB SEARCH <i class="fa fa-plus-square-o" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
<!-- slider end here -->
<!-- featured start here -->
	<div id="featured">
		<div class="container">
			<div class="row">
				<!-- featured-jobs start here -->
				<div class="featured-jobs">
					<h1>FEATURED JOBS</h1>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- featured-jobs end here -->
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="product-box">
						<div class="image">
							<a href="jobs.html">
								<img class="img-responsive" src="images/new/01.jpg" alt="p1" title="p1"/>
							</a>	
								<div class="buttons">
									<div class="open-down">
										<button type="button" class="rotate1">
											<i class="fa fa-link" aria-hidden="true"></i>
										</button>
										<button type="button" class="rotate1">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>		
						</div>		
						<div class="matter">
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<p>There are many variations of passages of lorem Ipsum available [...]</p>
						</div>
						<button type="button" class="btn btn-info" onclick="location.href='jobs.html'">VIEW MORE</button>
						<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">APPLY NOW</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="product-box">
						<div class="image">
							<a href="jobs.html">
								<img class="img-responsive" src="images/new/02.jpg" alt="p2" title="p2"/>
							</a>	
								<div class="buttons">
									<div class="open-down">
										<button type="button" class="rotate1">
											<i class="fa fa-link" aria-hidden="true"></i>
										</button>
										<button type="button" class="rotate1">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>		
						</div>		
						<div class="matter">
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<p>There are many variations of passages of lorem Ipsum available [...]</p>
						</div>
						<button type="button" class="btn btn-info" onclick="location.href='jobs.html'">VIEW MORE</button>
						<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">APPLY NOW</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="product-box">
						<div class="image">
							<a href="jobs.html">
								<img class="img-responsive" src="images/new/03.jpg" alt="p3" title="p3"/>
							</a>	
								<div class="buttons">
									<div class="open-down">
										<button type="button" class="rotate1">
											<i class="fa fa-link" aria-hidden="true"></i>
										</button>
										<button type="button" class="rotate1">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>		
						</div>		
						<div class="matter">
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<p>There are many variations of passages of lorem Ipsum available [...]</p>
						</div>
						<button type="button" class="btn btn-info" onclick="location.href='jobs.html'">VIEW MORE</button>
						<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">APPLY NOW</button>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="product-box">
						<div class="image">
							<a href="jobs.html">
								<img class="img-responsive" src="images/new/04.jpg" alt="p4" title="p4"/>
							</a>	
								<div class="buttons">
									<div class="open-down">
										<button type="button" class="rotate1">
											<i class="fa fa-link" aria-hidden="true"></i>
										</button>
										<button type="button" class="rotate1">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>		
						</div>		
						<div class="matter">
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<p>There are many variations of passages of lorem Ipsum available [...]</p>
						</div>
						<button type="button" class="btn btn-info" onclick="location.href='jobs.html'">VIEW MORE</button>
						<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">APPLY NOW</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- featured end here -->
<!-- browse start here -->
	<div class="browse">
		<div class="container">
			<div class="row">
				<!-- featured-jobs start here -->
				<div class="browse-jobs">
					<h1>BROWSE JOBS</h1>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- featured-jobs end here -->
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.html">
							<div class="boxbor">
								<i class="fa fa-desktop" aria-hidden="true"></i>
								<span>Information Technology</span>
							</div>
						</a>
					</div>	
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.html">
							<div class="boxbor">
								<i class="fa fa-university" aria-hidden="true"></i>
								<span>Banking</span>
							</div>
						</a>
					</div>
				</div>
			    <div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.html">
							<div class="boxbor">
							<i class="fa fa-money" aria-hidden="true"></i>
								<span>Accounting</span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.html">
							<div class="boxbor">
								<i class="fa fa-bar-chart" aria-hidden="true"></i>
									<span>Sales & marketing</span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.html">
							<div class="boxbor">
								<i class="fa fa-tachometer" aria-hidden="true"></i>
								<span>Digital & Creative</span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.html">
							<div class="boxbor">
							<i class="fa fa-suitcase" aria-hidden="true"></i>
								<span>Management</span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.html">
							<div class="boxbor">
								<i class="fa fa-gavel" aria-hidden="true"></i>
									<span>Legal Jobs</span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.html">
							<div class="boxbor">
							<i class="fa fa-tags" aria-hidden="true"></i>
								<span>Retail</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- browse end here -->
<!-- testimonial start here -->
	<div id="testimonial">
		<div class="container">
			<div class="row">
				<!-- testimonial-jobs start here -->
				<div class="testimonial-jobs">
					<h1>TESTIMONIAL</h1>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- testimonial-jobs end here -->
				<div id="testimonials" class="col-md-12 col-sm-12 col-xs-12 owl-carousel">
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="images/pic-1.png" class="img-responsive" alt="pic-1" title="pic-1" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="images/pic-2.png" class="img-responsive" alt="pic-2" title="pic-2" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="images/pic-3.png" class="img-responsive" alt="pic-3" title="pic-3" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="images/pic-1.png" class="img-responsive" alt="pic-1" title="pic-1" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="images/pic-2.png" class="img-responsive" alt="pic-2" title="pic-2" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="images/pic-3.png" class="img-responsive" alt="pic-3" title="pic-3" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- testimonial end here -->
<!-- blog start here -->
	<div id="blog">
		<div class="container">
			<div class="row">
				<!-- latest-blog start here -->
				<div class="latest-blog">
					<h1>Latest Blog</h1>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- latest-blog end here -->
				<div class="col-md-6 col-sm-6 col-xs-12">
					<!-- box start here -->
					<div class="box">
						<a href="blog.html">
							<img src="images/b1.jpg" alt="b1" title="b1" class="img-responsive" />
						</a>
						<div class="matter">
							<h1>Tonsectetur adipiscing elit. Viva mus id interdum nibh, eu</h1>
							<p>Aestibulum nec mauris sapien. Vestibulum ultricies quam sit amet pretium rutrum. Etiam tempus lacus in sem imperdiet ...</p>
							<a href="blog.html">Read more	<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<!-- box end here -->
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<!-- box start here -->
					<div class="box">
						<a href="blog.html">
							<img src="images/b2.jpg" alt="b2" title="b2" class="img-responsive" />
						</a>
						<div class="matter">
							<h1>Tonsectetur adipiscing elit. Viva mus id interdum nibh, eu</h1>
							<p>Aestibulum nec mauris sapien. Vestibulum ultricies quam sit amet pretium rutrum. Etiam tempus lacus in sem imperdiet ...</p>
							<a href="blog.html">Read more	<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<!-- box end here -->
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<!-- box start here -->
					<div class="box">
						<a href="blog.html">
							<img src="images/b3.jpg" alt="b3" title="b3" class="img-responsive" />
						</a>
						<div class="matter">
							<h1>Tonsectetur adipiscing elit. Viva mus id interdum nibh, eu</h1>
							<p>Aestibulum nec mauris sapien. Vestibulum ultricies quam sit amet pretium rutrum. Etiam tempus lacus in sem imperdiet ...</p>
							<a href="blog.html">Read more	<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<!-- box end here -->
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<!-- box start here -->
					<div class="box">
						<a href="blog.html">
							<img src="images/b4.jpg" alt="b4" title="b4" class="img-responsive" />
						</a>
						<div class="matter">
							<h1>Tonsectetur adipiscing elit. Viva mus id interdum nibh, eu</h1>
							<p>Aestibulum nec mauris sapien. Vestibulum ultricies quam sit amet pretium rutrum. Etiam tempus lacus in sem imperdiet ...</p>
							<a href="blog.html">Read more	<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<!-- box end here -->
				</div>
			</div>
		</div>
	</div>
<!-- blog end here -->
<!-- latest start here -->
	<div id="latest">
		<div class="container">
			<div class="row">
				<!-- latest-candidate start here -->
				<div class="latest-candidate">
					<h1>OUR LATEST CANDIDATES</h1>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- latest-candidate end here -->
				<div id="latests" class="owl-carousel">
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-1.png" class="img-responsive" alt="cand-1" title="cand-1" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-2.png" class="img-responsive" alt="cand-2" title="cand-2" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-3.png" class="img-responsive" alt="cand-3" title="cand-3" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-4.png" class="img-responsive" alt="cand-4" title="cand-4" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-5.png" class="img-responsive" alt="cand-5" title="cand-5" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-6.png" class="img-responsive" alt="cand-6" title="cand-6" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-1.png" class="img-responsive" alt="cand-1" title="cand-1" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-2.png" class="img-responsive" alt="cand-2" title="cand-2" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-3.png" class="img-responsive" alt="cand-3" title="cand-3" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-4.png" class="img-responsive" alt="cand-4" title="cand-4" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- latest end here -->
<!-- partner start here -->
	<div id="partner">
		<div class="container">
			<div class="row">
				<!-- our-partner start here -->
				<div class="our-partner">
					<h1>OUR PARTNERS</h1>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- our-partner end here -->
				<div id="partners" class="owl-carousel">
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="images/l1.jpg" class="img-responsive" alt="l1" title="l1" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="images/l2.jpg" class="img-responsive" alt="l2" title="l2" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="images/l3.jpg" class="img-responsive" alt="l3" title="l3" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="images/l4.jpg" class="img-responsive" alt="l4" title="l4" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="images/l5.jpg" class="img-responsive" alt="l5" title="l5" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="images/l1.jpg" class="img-responsive" alt="l1" title="l1" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="images/l2.jpg" class="img-responsive" alt="l2" title="l2" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- partner end here -->
<!-- Footer start here -->
<?php
	$this->load->view('footer');
?>