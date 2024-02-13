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


<!-- banner start here -->
	<div class="banner">
		<img src="images/title_bar.jpg" alt="banner" title="banner" class="img-responsive"/>
		<div class="container">
            <h1>Web Developer</h1>
		</div>	
	</div>
<!-- banner end here -->

<!-- list view start here -->
<div class="listpage1">
	<div class="container">
        <!-- breadcrumb start here -->
        <div class="breadcrumb row">
            <div class="col-sm-6 col-xs-12">
                <ul class="list-inline breads">
                    <li><a href="index-2.html"><img src="images/img_home.png" alt="home" title="home" class="img-responsive"/> HomePage</a></li>
                    <li><a href="jobs-list-view1.html">CategoryPage</a></li>
                </ul>
            </div>
            <div class="sort col-sm-6 col-xs-12">
                <div class="row">
                    <div class="search-bar col-sm-offset-3 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="search col-sm-6 col-xs-12">
                                <button type="submit" class="btnsrch" onclick="location.href='jobs.html'"><img src="images/search_icon.png" class="img-responsive" alt="img" title="img"/></button>
                                <input placeholder="search" name="search" class="form-control" type="text">		
                            </div>
                            <div class="col-sm-6 col-xs-12 padd0">
                                <select class="selectpicker form-control" name="filter">
                                    <option value="1">Select Filter</option>
                                    <option value="0">Price:low to high</option>
                                    <option value="0">Latest</option>
                                    <option value="0">BY Model</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group col-sm-3 hidden-xs">
                        <label>View</label>
                        <button class="btn-primary" id="grid-view"><i class="fa fa-th-large" aria-hidden="true"></i></button>
                        <button class="btn-primary active" id="list-view"><i class="fa fa-th-list" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end here -->
		<div class="row">
		    <div class="product-list col-md-12 col-sm-12 col-xs-12">
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
                             <button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">Apply Now</button>
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
			<div class="product-list col-md-12 col-sm-12 col-xs-12">
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
                             <button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">Apply Now</button>
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
			<div class="product-list col-md-12 col-sm-12 col-xs-12">
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
                             <button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">Apply Now</button>
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
			<div class="product-list col-md-12 col-sm-12 col-xs-12">
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
                             <button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">Apply Now</button>
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
             <div class="product-list col-md-12 col-sm-12 col-xs-12">
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
                             <button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">Apply Now</button>
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
            <div class="product-list col-md-12 col-sm-12 col-xs-12">
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
                             <button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">Apply Now</button>
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
            <div class="product-list col-md-12 col-sm-12 col-xs-12">
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
                             <button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">Apply Now</button>
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
            <div class="product-list col-md-12 col-sm-12 col-xs-12">
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
                             <button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">Apply Now</button>
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
<!-- list view end here -->

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
<?php
	$this->load->view('footer');
?>
