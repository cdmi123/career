<?php
	$this->load->view('header');
?>
<!-- header end here -->
<!-- jobs start here -->
	<div id="jobs">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- about-content start here -->
					<div class="jobs-content">
						<h1>Job Detail</h1>
						<ul class="list-inline">
							<li>
								<a href="<?php echo site_url('home/index'); ?>">Home</a>
							</li>
							<li>
								<a href="<?php echo site_url('apply_job_form/index'); ?>">Jobs</a>
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


	<div id="jobdetail">
		<div class="container">
			<div class="row">
				
				<form enctype="multipart/form-data" class="form-horizontal candidate-single" method="post">
				<div class="col-md-4 col-sm-4 col-xs-12 hidden-xs">
					<img src="<?php echo base_url("uploads/company/".$jobdetail['image']);?>" alt="p6" title="p6" class="img-responsive" />
					<div class="left-side">
						<ul class="list-unstyled">
							<li>
								<h5><i class="fa fa-map-marker" aria-hidden="true"></i> Location</h5>
								<p><?php echo $jobdetail['location_name']; ?></p>
							</li>
							<li>
								<h5><i class="fa fa-money" aria-hidden="true"></i> 
								Salary</h5>
								<p><?php echo $jobdetail['salary_given']; ?></p>
							</li>
							<li>
								<h5><i class="fa fa-shield" aria-hidden="true"></i> 
								Experience</h5>
								<p><?php echo $jobdetail['exper_req']; ?></p>
							</li>
							<li>
								<h5><i class="fa fa-clock-o" aria-hidden="true"></i> Posted</h5>
								<p><?php echo $jobdetail['start_date']; ?></p>
							</li>
						</ul>
					</div>
					<div class="leftside margin-t">
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
							<a href="<?php echo site_url('apply_job_form/index/'.$value['job_id']);?>">Apply Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					<?php } ?>
					</div>
				</div>
			</form>

				<div class="col-md-8 col-sm-8 col-xs-12 paddleft content">
					<h1><?php echo $jobdetail['job_title']; ?></h1>

					<p><b>Skill : <?php echo $jobdetail['skill_name'] ?></b></p>
					<ul class="list-inline">
						<li>
							<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
						</li>
					</ul>
					<p><!-- <?php //echo $jobdetail['skill_name']; ?> --></p>
					<h5>Job Description</h5>
					<p><span><?php echo $jobdetail['basic_req']; ?></span>
					</p>
					<center><button type="submit"  class="btn btn-info">APPLY THIS JOB</button></center>
					<div class="clearfix"></div>
					<div class="job-form col-md-12 col-sm-12 col-xs-12">
						<div class="border"></div>
						<div class="border1"></div>
				<!-- <div style="color:red">
                <?php// echo @$msg; ?>
              	</div> -->

						<form class="form-horizontal" enctype="multipart/form-data" method="post">
							<fieldset>
								<div class="form-group">
									<div class="col-sm-12">
										<label>First Name</label>
										<input type="text" name="name" value="<?php echo $info['name'] ?>" class="form-control" placeholder="Type your first name">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<label>Your Email</label>
										<input type="text" name="email" value="<?php echo $info['email'] ?>" class="form-control"  placeholder="Enter your email address" >
									</div>
									<div class="col-sm-6">
										<label>Add your Resume</label>
										<div class="browse">
											<input type="file" name="file" class="" value="" >
											<!-- <label for="file">Choose a file</label> -->
										</div>
										<span>Your CV must be a .doc, .pdf, .docx, .rtf and no bigger than 1Mb</span>
									</div>
								</div>
								<div class="button">
									<button type="submit" value="Submit" class="btn btn-primary btnus" >APPLY NOW</button>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				<!-- featured start here -->
				<div id="similar" class="col-md-12 col-sm-12 col-xs-12 padd0">
					<!-- similar-jobs start here -->
					<div class="similar-jobs">
						<div class="border"></div>
						<h1><span>Similars</span> JOBS</h1>
						<div class="border1"></div>
					</div>
					<!-- similar-jobs end here -->
					
				<?php 
					foreach ($jobpost as $value) {		
				?>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="product-box">
						<div class="image">
							<a href="<?php echo site_url('jobs/index');?>">
								<img src="<?php echo base_url('./uploads/company/'.$value['image']) ?>" alt="jobpost" title="slider" class="img-responsive" style="max-height: 150px;min-height: 150px;"/>
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
									<i class="fa fa-map-marker" aria-hidden="true"></i>
									
											<?php echo $value['location_name']; ?> 		
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
				<!-- featured end here -->
			</div>
		</div>
	</div>
<!-- abouts end here -->
<!-- Footer start here -->
<?php
	$this->load->view('footer');
?>