<?php
	$this->load->view('header');
?>    
	<!-- menu start here-->
    <div class="menu">       
         <div class="container">
             <div class="row">
		    	<nav class="navbar" id="menu">
					<div class="navbar-header">
						<span class="menutext visible-xs">Menu</span>
						<button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li class="dropdown active">
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
				<!-- menu end here -->
             </div>
        </div>
    </div>   


<!-- slider start here -->
	<div class="slideshow owl-carousel">
		<div class="item">
			<img src="images/slider_banner.jpg" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
                    <div class="row">
						<div class="col-sm-7 col-xs-12">
                            <h1>Get Your favourite jobs over <span>12,000</span> Jobs</h1>
                            <select class="selectpicker form-control" name="allcate">
                                <option value="1">All Category</option>
                                <option value="0">Category 1</option>
                                <option value="0">Category 2</option>
                                <option value="0">Category 3</option>
                             </select>
                             <select class="selectpicker form-control" name=	"location">
                                 <option value="1">Select Location</option>
                                 <option value="0">Location 1</option>
                                 <option value="0">Location 2</option>
                                 <option value="0">Location 3</option>
                            </select>
                            <button type="submit" class="btnsrch" onclick="location.href='jobs.html'"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="col-sm-5 col-xs-12">
                            <div class="col-sm-12 col-xs-12 bg">
                                <button type="button" class="btn btn-primary" onclick="location.href='register.html'">Register Free</button>
                                <p>lorem ipsum dolor sit ameit,consecturer edipising elit.Nam Volutpat purus in ferments uecturer tortor id,phetra lorem.</p>
                                <div class="buttons">
                                    <button type="button" class="btn btn-default" onclick="location.href='jobs-list-view1.html'">Post Job</button> <span class="or">or</span>
                                    <button type="button" class="btn btn-default" onclick="location.href='search_page.html'">Find Job</button>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>	
	</div>
<!-- slider end here -->

<!-- latest start here -->
	<div class="latestjobs">
		<div class="container">
			<div class="row">
				<!-- latest-jobs start here -->
				<div class="latest-jobs">
					<h1>LATEST JOBS</h1>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- latest-jobs end here -->
				
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="product-list-view">		
						<div class="matter col-sm-12 col-xs-12">
                            <div class="pull-left">
                                <h1>IT Department Manager</h1>
                                <ul class="list-inline">
                                    <li>
                                        <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info" onclick="location.href='list-detail-page.html'">Apply Now</button>
                            </div>
                        </div>
						<p>We Required candidate for Adobe illustrator and Photoshop Salary-10000 to 12000 Male/Female are required  JOBTYPE: Full Time.<br/><b>ELIGIBILITY:</b> Hard Worker...</p>
						<ul class="list-inline tags">
                            <li>Illustrator</li>
                            <li>Photoshop</li>
                            <li>Designslt</li>
                            <li>CoralDraw</li>
                        </ul>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="product-list-view">		
						<div class="matter col-sm-12 col-xs-12">
                            <div class="pull-left">
                                <h1>IT Department Manager</h1>
                                <ul class="list-inline">
                                    <li>
                                        <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info" onclick="location.href='list-detail-page.html'">Apply Now</button>
                            </div>
                        </div>
						<p>We Required candidate for Adobe illustrator and Photoshop Salary-10000 to 12000 Male/Female are required  JOBTYPE: Full Time.<br/><b>ELIGIBILITY:</b> Hard Worker...</p>
						<ul class="list-inline tags">
                            <li>Illustrator</li>
                            <li>Photoshop</li>
                            <li>Designslt</li>
                            <li>CoralDraw</li>
                        </ul>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="product-list-view">		
						<div class="matter col-sm-12 col-xs-12">
                            <div class="pull-left">
                                <h1>IT Department Manager</h1>
                                <ul class="list-inline">
                                    <li>
                                        <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info" onclick="location.href='list-detail-page.html'">Apply Now</button>
                            </div>
                        </div>
						<p>We Required candidate for Adobe illustrator and Photoshop Salary-10000 to 12000 Male/Female are required  JOBTYPE: Full Time.<br/><b>ELIGIBILITY:</b> Hard Worker...</p>
						<ul class="list-inline tags">
                            <li>Illustrator</li>
                            <li>Photoshop</li>
                            <li>Designslt</li>
                            <li>CoralDraw</li>
                        </ul>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="product-list-view">		
						<div class="matter col-sm-12 col-xs-12">
                            <div class="pull-left">
                                <h1>IT Department Manager</h1>
                                <ul class="list-inline">
                                    <li>
                                        <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info" onclick="location.href='list-detail-page.html'">Apply Now</button>
                            </div>
                        </div>
						<p>We Required candidate for Adobe illustrator and Photoshop Salary-10000 to 12000 Male/Female are required  JOBTYPE: Full Time.<br/><b>ELIGIBILITY:</b> Hard Worker...</p>
						<ul class="list-inline tags">
                            <li>Illustrator</li>
                            <li>Photoshop</li>
                            <li>Designslt</li>
                            <li>CoralDraw</li>
                        </ul>
					</div>
				</div>
                <div class="col-md-12 col-sm-12 col-xs-12">
					<div class="product-list-view">		
						<div class="matter col-sm-12 col-xs-12">
                            <div class="pull-left">
                                <h1>IT Department Manager</h1>
                                <ul class="list-inline">
                                    <li>
                                        <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info" onclick="location.href='list-detail-page.html'">Apply Now</button>
                            </div>
                        </div>
						<p>We Required candidate for Adobe illustrator and Photoshop Salary-10000 to 12000 Male/Female are required  JOBTYPE: Full Time.<br/><b>ELIGIBILITY:</b> Hard Worker...</p>
						<ul class="list-inline tags">
                            <li>Illustrator</li>
                            <li>Photoshop</li>
                            <li>Designslt</li>
                            <li>CoralDraw</li>
                        </ul>
					</div>
				</div>
                <div class="col-md-12 col-sm-12 col-xs-12">
					<div class="product-list-view">		
						<div class="matter col-sm-12 col-xs-12">
                            <div class="pull-left">
                                <h1>IT Department Manager</h1>
                                <ul class="list-inline">
                                    <li>
                                        <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info" onclick="location.href='list-detail-page.html'">Apply Now</button>
                            </div>
                        </div>
						<p>We Required candidate for Adobe illustrator and Photoshop Salary-10000 to 12000 Male/Female are required  JOBTYPE: Full Time.<br/><b>ELIGIBILITY:</b> Hard Worker...</p>
						<ul class="list-inline tags">
                            <li>Illustrator</li>
                            <li>Photoshop</li>
                            <li>Designslt</li>
                            <li>CoralDraw</li>
                        </ul>
					</div>
				</div>
                <div class="col-md-12 col-sm-12 col-xs-12">
					<div class="product-list-view">		
						<div class="matter col-sm-12 col-xs-12">
                            <div class="pull-left">
                                <h1>IT Department Manager</h1>
                                <ul class="list-inline">
                                    <li>
                                        <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info" onclick="location.href='list-detail-page.html'">Apply Now</button>
                            </div>
                        </div>
						<p>We Required candidate for Adobe illustrator and Photoshop Salary-10000 to 12000 Male/Female are required  JOBTYPE: Full Time.<br/><b>ELIGIBILITY:</b> Hard Worker...</p>
						<ul class="list-inline tags">
                            <li>Illustrator</li>
                            <li>Photoshop</li>
                            <li>Designslt</li>
                            <li>CoralDraw</li>
                        </ul>
					</div>
				</div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center">
						<ul class="pagination">
							<li>
								<a href="#" aria-label="Previous"><span aria-hidden="true" class="fa fa-angle-left"></span></a>
							</li>
							<li class="active">
								<a href="#"> 1</a> 
							</li>
							<li>
								<a href="#"> 2</a> 
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#"> 4</a> 
							</li>
							<li>
								<a href="#"> 5</a> 
							</li>
							<li>
								<a href="#" aria-label="Next"><span aria-hidden="true" class="fa fa-angle-right"></span></a>
							</li>
							<li>
								<a href="#" aria-label="Next"><span aria-hidden="true" class="fa fa-angle-double-right"></span></a>
							</li>
						</ul>
					</div>
			</div>
		</div>
	</div>
<!-- featured end here -->

<!-- testimonial start here -->
	<div class="testimonial">
		<div class="container">
            <!-- testimonial-jobs start here -->
			<div class="latest-jobs">
				<h1>What our client say</h1>
				<div class="border"></div>
				<div class="border1"></div>
			</div>
			<!-- testimonial-jobs end here -->
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="comment-detail">lorem ipsum dolor sit ameit, apisitdeul sit lorem lorem ipsum dolor sit ameit lorem ipsum dolor sit ameit lorem ipsum dolor sit ameit,There are many variations of passages of Lorem Ipsum available, temporary  type ameit lorem ipsum dolor sit ameit,There are many variations of passages of Lorem Ipsum available, temporary  type  words eget dolor.Aenema massa. </div>
					<div class="more">
				        <img src="images/testimonial_img.png" class="img-responsive" alt="testimonial" title="testimonial" />
                        <div class="name">Joe Doe</div>
                        <div class="designation">Creative Director at Gmoogle.com</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="comment-detail">lorem ipsum dolor sit ameit, apisitdeul sit lorem lorem ipsum dolor sit ameit lorem ipsum dolor sit ameit lorem ipsum dolor sit ameit,There are many variations of passages of Lorem Ipsum available, temporary  type  words eget dolor.Aenema massa. </div>
					<div class="more">
				        <img src="images/testimonial_img.png" class="img-responsive" alt="testimonial" title="testimonial" />
                        <div class="name">Joe Doe</div>
                        <div class="designation">Creative Director at Gmoogle.com</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="comment-detail">lorem ipsum dolor sit ameit, apisitdeul sit lorem lorem ipsum dolor sit ameit lorem ipsum dolor sit ameit lorem ipsum dolor sit ameit,There are many variations of passages of Lorem Ipsum available. </div>
					<div class="more">
				        <img src="images/testimonial_img.png" class="img-responsive" alt="testimonial" title="testimonial" />
                        <div class="name">Joe Doe</div>
                        <div class="designation">Creative Director at Gmoogle.com</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="comment-detail">lorem ipsum dolor sit ameit, apisitdeul sit lorem lorem ipsum dolor sit ameit lorem ipsum dolor sit ameit lorem ipsum dolor sit ameit. </div>
					<div class="more">
				        <img src="images/testimonial_img.png" class="img-responsive" alt="testimonial" title="testimonial" />
                        <div class="name">Joe Doe</div>
                        <div class="designation">Creative Director at Gmoogle.com</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- testimonial end here -->

<?php
	$this->load->view('footer');
?>