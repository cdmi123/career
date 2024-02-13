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
					<div class="jobs-content employee">
						<h1>COMPANY</h1>
						<ul class="list-inline">
							<li>
								<a href="<?php echo site_url('home/index'); ?>">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="<?php echo site_url('company_list/index'); ?>">Company List</a>
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
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12 hidden-xs">
					<div class="left left1">
						<div class="job-candidate">
							<h1>FEATURED CANDIDATES</h1>
							<div class="border"></div>
							<div class="border1"></div>
						</div>
						
						<div id="latestsfeat" class="owl-carousel">
							<?php  
							foreach ($user as $value) {
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
						foreach ($jobpost1 as $value) {		
						?>
						<div class="job-content">
							<img src="<?php echo base_url('./uploads/company/'.$value['image']) ?>" alt="p1" title="p1" />
							<h1><?php echo $value['post_name'] ?></h1>
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
					<div class="career">
						<img src="<?php echo base_url('assets/images/left-banner.jpg')?>" title="left-banner" alt="left-banner" class="img-responsive">
					</div>
				</div>

				<div class="col-md-9 col-sm-9 col-xs-12 padd0">
					<?php
					foreach($company as $value)
					{
						$company_id = $value['company_id'];
						$this->db->where('company_id',$company_id);
						$num = $this->db->get('job_post')->num_rows();
					?>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="employe-box">
							<div class="image">
								<a href="<?php echo site_url('company_page/index/'.$value['company_id']); ?>"><img class="img-responsive" src="<?php echo base_url('./uploads/company/'.$value['image']) ?>" alt="logo" title="logo" style="max-height: 100px;min-height: 100px;max-width: 235px;min-width: 235px;"/></a>
							</div>		
							<div class="pull-left">
								<p>Jobs : <?php echo $num; ?></p>

							</div>
							<div class="pull-right">
								<button type="button" class="rotate1">
									<i class="fa fa-search" aria-hidden="true"></i>

								</button>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<!-- job end here -->
<!-- Footer start here -->
<?php
	$this->load->view('footer');
?>	