<?php
	$this->load->view('header');
?>
<!-- slider start here -->
	<div class="slideshows">
		<img src="images/model-image.png" alt="model-image" title="model-image" class="img-responsive">
			<div class="slide-detail">
				<div class="container">
					<div class="slider-caption">
						<div class="off"></div>
						<h1>Register & Find Your Job</h1>
							<ul class="list-inline">
								<li>
									<form method="post" enctype="multipart/form-data" id="category">
										<div class="btn-group">
											<button class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												<span class="text">All Category </span>
													<i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#">Category 1</a></li>
												<li><a href="#">Category 2</a></li>
												<li><a href="#">Category 3</a></li>
												<li><a href="#">Category 4</a></li>
											</ul>
										</div>
									</form>
								</li>
								<li>
									<form method="post" enctype="multipart/form-data" id="location">
										<div class="btn-group">
											<button class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												<span class="text">Select Location </span>
													<i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#">Location 1</a></li>
												<li><a href="#">Location 2</a></li>
												<li><a href="#">Location 3</a></li>
												<li><a href="#">Location 4</a></li>
											</ul>
										</div>
									</form>
								</li>
								<li>
									<form method="post" enctype="multipart/form-data" id="search">
										<div class="btn-group">
											<input name="s" value="" placeholder="Search" type="text">
										</div>
									</form>
								</li>
								<li>
									<form method="post" enctype="multipart/form-data" id="search-button">
										<div class="btn-group">
											<button type="button" class="btn" onclick="location.href='jobs.html'"><i class="fa fa-search" aria-hidden="true"></i>SEARCH</button>
										</div>
									</form>
								</li>
							</ul>
							<div class="center">
								<button class="btn-default">ADVANCE JOB SEARCH <i class="fa fa-plus-square-o" aria-hidden="true"></i>
								</button>
							</div>
					</div>
				</div>
			</div>
	</div>
<!-- slider end here -->
<!-- browse start here -->
	<div class="browse">
		<div class="container">
			<div class="row">
				<!-- featured-jobs start here -->
				<div class="browse-jobs">
					<div class="border"></div>
					<h1><span>BROWSE</span> JOBS</h1>
					<div class="border1"></div>
				</div>
				<!-- featured-jobs end here -->
				<div class="col-md-12">
					<ul class="list-inline browse-job">
						<li>
							<div class="matter1">
								<a href="jobs.html">
									<i class="fa fa-desktop" aria-hidden="true"></i>
									<span>Information Technology</span>
								</a>
							</div>
						</li>
						<li>
							<div class="matter1">
								<a href="jobs.html">
									<i class="fa fa-university" aria-hidden="true"></i>
									<span>Banking</span>
								</a>
							</div>
						</li>
						<li>
							<div class="matter1">
								<a href="jobs.html">
									<i class="fa fa-money" aria-hidden="true"></i>
									<span>Accounting</span>
								</a>
							</div>
						</li>
						<li>
							<div class="matter1">
								<a href="jobs.html">
									<i class="fa fa-bar-chart" aria-hidden="true"></i>
									<span>Sales & marketing</span>
								</a>
							</div>
						</li>
						<li>
							<div class="matter1">
								<a href="jobs.html">
									<i class="fa fa-tachometer" aria-hidden="true"></i>
									<span>Digital & Creative</span>
								</a>
							</div>
						</li>
						<li>
							<div class="matter1">
								<a href="jobs.html">
									<i class="fa fa-suitcase" aria-hidden="true"></i>
									<span>Management</span>
								</a>
							</div>
						</li>
						<li>
							<div class="matter1">
								<a href="jobs.html">
									<i class="fa fa-gavel" aria-hidden="true"></i>
									<span>Legal Jobs</span>
								</a>
							</div>
						</li>
						<li>
							<div class="matter1">
								<a href="jobs.html">
									<i class="fa fa-tags" aria-hidden="true"></i>
									<span>Retail</span>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<!-- browse end here -->
<!-- featured start here -->
	<div id="featured">
		<div class="container">
			<div class="row">
				<!-- featured-jobs start here -->
				<div class="featured-jobs">
					<div class="border"></div>
					<h1><span>FEATURED</span> JOBS</h1>
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
<!-- testimonial start here -->
	<div id="testimonial">
		<div class="container">
			<div class="row">
				<!-- testimonial-jobs start here -->
				<div class="testimonial-jobs">
					<div class="border"></div>
					<h1>TESTIMONIAL</h1>
					<div class="border1"></div>
				</div>
				<!-- testimonial-jobs end here -->
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<div class="photo">
						<img src="images/pic-1.png" alt="pic-1" title="pic-1" />
							<div class="photo-matter">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<div class="photo">
						<img src="images/pic-2.png" alt="pic-2" title="pic-2" />
							<div class="photo-matter">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<div class="photo">
						<img src="images/pic-3.png" alt="pic-3" title="pic-3" />
							<div class="photo-matter">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
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
					<div class="border"></div>
					<h1><span>Latest</span> Blog</h1>
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
					<div class="border"></div>
					<h1><span>OUR LATEST</span> CANDIDATES</h1>
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
					<div class="border"></div>
					<h1><span>OUR</span> PARTNERS</h1>
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