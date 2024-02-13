<?php
	$this->load->view('header');
?>    
	

<!-- banner start here -->
	<div class="banner">
		<img src="<?php echo base_url('assets/images/title_bar.jpg')?>" alt="banner" title="banner" class="img-responsive"/>
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
                    <li><a href="<?php echo site_url('home/index'); ?>"><img src="<?php echo base_url('assets/images/img_home.png')?>" alt="home" title="home" class="img-responsive"/> HomePage</a></li>
                    <li><a href="jobs-list-view1.html">CategoryPage</a></li>
                </ul>
            </div>
            <div class="sort col-sm-6 col-xs-12">
                <div class="row">
                    <div class="search-bar col-sm-offset-3 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="search col-sm-6 col-xs-12">
                                <button type="submit" class="btnsrch" onclick="location.href='<?php echo site_url('jobs/index'); ?>'">
                                    <img src="<?php echo base_url('assets/images/search_icon.png')?>" class="img-responsive" alt="img" title="img"/></button>
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
            <div class="col-sm-3 hidden-xs columnleft">
                <h2>Salary Estimate</h2>
                <ul class="list-unstyled">
                    <li class="active"><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 10,000-15,000</a></li>
                    <li><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 15,000-20,000</a></li>
                    <li><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 20,000-25,000</a></li>
                    <li><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 25,000-30,000</a></li>
                    <li><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 30,000-40,000</a></li>
                    <li><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 40,000-60,000</a></li>
                </ul>
                <h2>job Type</h2>
                <ul class="list-unstyled">
                    <li class="active"><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Web Designer(40)</a></li>
                    <li><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Graphic Designer(42)</a></li>
                    <li><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i> .Net Developer(24)</a></li>
                    <li><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Android Developer(36)</a></li>
                    <li><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Php Developer(48)</a></li>
                    <li><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i> opencart(44)</a></li>
                </ul>
                <div class="serach-latest col-sm-12">
                    <h3>Search first latest jobs here</h3>
                    <div class="input-group">
                        <input placeholder="Enter your Email Address"  name="jobs" class="form-control" type="text">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit">submit</button>
						</div>
				    </div>
                    <h1>Get Notified</h1>
                </div>
            </div>
            <div class="col-sm-9 col-xs-12">
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
							<img src="<?php echo base_url('assets/images/l1.jpg')?>" class="img-responsive" alt="l1" title="l1" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="<?php echo base_url('assets/images/l2.jpg')?>" class="img-responsive" alt="l2" title="l2" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="<?php echo base_url('assets/images/l3.jpg')?>" class="img-responsive" alt="l3" title="l3" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="<?php echo base_url('assets/images/l4.jpg')?>" class="img-responsive" alt="l4" title="l4" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="<?php echo base_url('assets/images/l5.jpg')?>" class="img-responsive" alt="l5" title="l5" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="<?php echo base_url('assets/images/l1.jpg')?>" class="img-responsive" alt="l1" title="l1" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="<?php echo base_url('assets/images/l2.jpg')?>" class="img-responsive" alt="l2" title="l2" />
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