<?php
	$this->load->view('header');
?>
<!-- jobs start here -->
	<div id="jobs">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- about-content start here -->
					<div class="jobs-content">
						<h1>Jobs</h1>
						<ul class="list-inline">
							<li>
								<a href="index-2.html">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="jobs-list-view.html">Jobs</a>
							</li>
						</ul>
					</div>
				<!-- jobs-content end here -->
				</div>
			</div>
		</div>
	</div>
<!-- jobs end here -->
<!-- job start here -->
	<div id="job">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 form1">
				<div class="sort col-md-2 col-sm-2 col-xs-12">
					<label class="control-label">Sort By:</label>
					<select class="form-control selectpicker">
                        <option value="">Default</option>
                        <option value="" selected="selected">Name (A - Z)</option>
                        <option value="">Name (Z - A)</option>
                        <option value="">Price (Low &gt; High)</option>
                        <option value="">Price (High &gt; Low)</option>
                        <option value="">Rating (Highest)</option>
                        <option value="">Rating (Lowest)</option>
                        <option value="">Model (A - Z)</option>
                        <option value="">Model (Z - A)</option>
                    </select>
				</div>
				<div class="show col-md-2 col-sm-2 col-xs-12">
					<label class="control-label">Show:</label>
					<select class="form-control selectpicker">
                        <option value="" selected="selected">10</option>
                        <option value="">15</option>
                        <option value="">25</option>
                        <option value="">50</option>
                        <option value="">75</option>
                        <option value="">100</option>
                    </select>
				</div>
				<div class="category col-md-2 col-sm-2 col-xs-12">
					<label class="control-label" >Category:</label>
					<select  class="form-control selectpicker">
						<option value="">Information Technology</option>
						<option value="" selected="selected">Banking</option>
						<option value="">Accounting</option>
						<option value="">Sales & marketing</option>
						<option value="">Digital & Creative</option>
						<option value="">Management</option>
						<option value="">Legal Jobs</option>
						<option value="">Retail</option>
					</select>
				</div>
				<div class="keyword col-md-6 col-sm-6 col-xs-12">
					<label class="control-label">Keywords:</label>
					<br>
					<button type="button" class="btn btn-primary" onclick="location.href='jobs.html'">Engineering</button>
					<button type="button" value="Submit" class="btn btn-success" onclick="location.href='jobs.html'">IT</button>
					<button type="button" value="Submit" class="btn btn-danger" onclick="location.href='jobs.html'">Marketing</button>
					<button type="button" value="Submit" class="btn btn-warning" onclick="location.href='jobs.html'">Banking</button>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12 hidden-xs">
					<div class="left left1">
						<div class="job-candidate">
							<h1>FEATURED CANDIDATES</h1>
							<div class="border"></div>
							<div class="border1"></div>
						</div>
						<div id="latestsfeat" class="owl-carousel">
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="images/cand-1.png" class="img-responsive" alt="cand-1" title="cand-1" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>	
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="images/cand-2.png" class="img-responsive" alt="cand-2" title="cand-2" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="images/cand-3.png" class="img-responsive" alt="cand-3" title="cand-3" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="images/cand-4.png" class="img-responsive" alt="cand-4" title="cand-4" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="images/cand-5.png" class="img-responsive" alt="cand-5" title="cand-5" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="images/cand-6.png" class="img-responsive" alt="cand-6" title="cand-6" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<div class="leftside">
						<div class="latest-jobs">
							<h1>LATEST JOBS</h1>
							<div class="border"></div>
							<div class="border1"></div>
						</div>
						<div class="job-content">
							<img src="images/new/01.jpg" alt="p1" title="p1" />
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<a href="apply-job-form.html">Apply Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
						<div class="job-content">
							<img src="images/new/02.jpg" alt="p2" title="p2" />
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<a href="apply-job-form.html">Apply Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
						<div class="job-content">
							<img src="images/new/03.jpg" alt="p3" title="p3" />
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<a href="apply-job-form.html">Apply Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
						<div class="job-content">
							<img src="images/new/04.jpg" alt="p4" title="p4" />
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<a href="apply-job-form.html">Apply Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="career">
						<img src="images/left-banner.jpg" title="left-banner" alt="left-banner" class="img-responsive">
					</div>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12 padd0 product-list">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="product-box">
							<div class="image">
								<a href="jobs-detail.html">
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
									<li>
										<a href="#"><i class="fa fa-money" aria-hidden="true"></i> 25,000 Per.month</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 45 minutes ago</a>
									</li>
								</ul>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout [..]</p>
								<button type="button" class="btn btn-info" onclick="location.href='list-detail-page.html'">VIEW MORE</button>
								<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">APPLY NOW</button>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="product-box">
							<div class="image">
								<a href="jobs-detail.html">
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
									<li>
										<a href="#"><i class="fa fa-money" aria-hidden="true"></i> 25,000 Per.month</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 45 minutes ago</a>
									</li>
								</ul>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout [..]</p>
								<button type="button" class="btn btn-info" onclick="location.href='list-detail-page.html'">VIEW MORE</button>
								<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">APPLY NOW</button>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="product-box">
							<div class="image">
								<a href="jobs-detail.html">
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
									<li>
										<a href="#"><i class="fa fa-money" aria-hidden="true"></i> 25,000 Per.month</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 45 minutes ago</a>
									</li>
								</ul>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout [..]</p>
								<button type="button" class="btn btn-info" onclick="location.href='list-detail-page.html'">VIEW MORE</button>
								<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">APPLY NOW</button>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="product-box">
							<div class="image">
								<a href="jobs-detail.html">
									<img class="img-responsive" src="images/new/04.jpg" alt="p1" title="p1"/>
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
									<li>
										<a href="#"><i class="fa fa-money" aria-hidden="true"></i> 25,000 Per.month</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 45 minutes ago</a>
									</li>
								</ul>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout [..]</p>
								<button type="button" class="btn btn-info" onclick="location.href='list-detail-page.html'">VIEW MORE</button>
								<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">APPLY NOW</button>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="product-box">
							<div class="image">
								<a href="jobs-detail.html">
									<img class="img-responsive" src="images/new/05.jpg" alt="p4" title="p4"/>
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
									<li>
										<a href="#"><i class="fa fa-money" aria-hidden="true"></i> 25,000 Per.month</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 45 minutes ago</a>
									</li>
								</ul>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout [..]</p>
								<button type="button" class="btn btn-info" onclick="location.href='list-detail-page.html'">VIEW MORE</button>
								<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">APPLY NOW</button>
							</div>
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
	</div>
<!-- abouts end here -->
<?php
	$this->load->view('footer');
?>