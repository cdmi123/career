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
								<a href="<?php echo site_url('home/index'); ?>">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="<?php echo site_url('jobs/index'); ?>">Jobs</a>
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
				<div class="slider-caption">
						<form method="post" action="<?php echo site_url('jobs/search');?>">
						<div class="off"></div>
						<h1>Find Your Job</h1>
						<div class="col-md-4 col-sm-4 col-xs-12 paddleft">
							<select name="category" class="selectpicker form-control">
								<option value="">All Category</option>
								<?php
									foreach ($info as  $v) 
									{
								?>
								<option value="<?php echo $v['category_id'] ?>"><?php echo $v['category_name'] ?></option>
								<?php
									}
								?>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select name="location" class="selectpicker form-control">
								<option value="">Select Location</option>
								<?php
									foreach ($info1 as  $v) 
									{
								?>
								<option value="<?php echo $v['location_id'] ?>"><?php echo $v['location_name'] ?></option>
								<?php
									}
								?>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 paddright">
							<div class="input-group">
								<input name="search_txt" class="form-control" value="" placeholder="Search" type="text">
								<span>
									<button type="submit" class="btnsrch" value="submit" name="Search"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
						
						</form>	
					</div>	
					
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12 hidden-xs">
					<div class="left">
						<div class="job-candidate">
							<h1>FEATURED CANDIDATES</h1>
							<div class="border"></div>
							<div class="border1"></div>
						</div>
						<div id="latestsfeat" class="owl-carousel">
							
							<?php 
							foreach($user as $value)
								{
						 		?>
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="<?php echo base_url('./uploads/user/'.$value['image']) ?>" class="img-responsive" alt="cand-1" title="cand-1" />
										<h1><?php echo $value['name'] ?></h1>
										<p><?php echo $value['skill_name'] ?> </p>
									</div>
								</div>
							</div>	
							<?php } ?>
						</div>
					</div>	
					<div class="leftside">
						<div class="latest-jobs">
							<h1>LATEST JOBS</h1>
							<div class="border"></div>
							<div class="border1"></div>
						</div>
						<?php 
						foreach ($jobpost as $value) {		
						?>
						<div class="job-content">
							<img src="<?php echo base_url('./uploads/company/'.$value['image']) ?>" alt="p1" title="p1" />
							<h1><?php echo $value['post_name'] ?>	
							</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $value['location_name'] ?></a>
								</li>
							</ul>
							<a href="<?php echo site_url('apply_job_form/index');?>">Apply Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					<?php } ?>
					</div>
					
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12 padd0">
					<?php 
					foreach ($jobpost as $value) {		
					?>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="product-box">
							<div class="image">
								<a href="jobs.html">
									<img class="img-responsive" src="<?php echo base_url('./uploads/company/'.$value['image']) ?>" alt="jobpost" title="p1" style="max-height: 150px;min-height: 150px;"/>
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
								<h1><?php echo $value['job_title'] ?></h1>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-map-marker" aria-hidden="true">
											<?php echo $value['location_name']; ?>
										</i></a>
									</li>
								</ul>
								<p>There are many variations of passages of lorem Ipsum available [...]</p>
							</div>
							<button type="button" class="btn btn-info" onclick="location.href='<?php echo site_url('jobs_detail/index/'.$value['job_id']);?>'">VIEW MORE</button>
							<button type="button" class="btn btn-info" onclick="location.href='<?php echo site_url('apply_job_form/index/'.$value['job_id']);?>'">APPLY NOW</button>
						</div>
					</div>
				<?php } ?>

				</div>
			</div>
		</div>
	</div>
<!-- job end here -->
<?php
	$this->load->view('footer');
?>