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
					<div class="jobs-content canditate">
						<h1>MY PROFILE</h1>
						<ul class="list-inline">
							<li>
								<a href="<?php echo site_url('home/index'); ?>">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="<?php echo site_url('my_profile/index'); ?>">Candidates</a>
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
				<div class="canditate-profile">
					<ul class="nav nav-tabs list-inline">
						<li class="active">
							<a href="#profile" data-toggle="tab" aria-expanded="true">PROFILE</a>
						</li>
						<li class="">
							<a href="#applied" data-toggle="tab" aria-expanded="false">APPLIED JOBS</a>
						</li>
					</ul>
				</div>
				<div class="tab-content">
					<div class="tab-pane active" id="profile">
						<div class="col-md-12">
						<form class="form-horizontal candidate-single" enctype="multipart/form-data" method="post">
						<fieldset>
							<?php

									$id = $this->session->userdata('client_id');

									$this->db->select('skill.skill_name,education.education_name,user.*');
									$this->db->join('skill','skill.skill_id=user.skill_id');
									$this->db->join('education','education.education_id=user.education_id');

									$this->db->where('id',$id);
									$qry = $this->db->get('user');
									$user_info = $qry->row_array();
								?>

							<div class="form-group">	
								<div class="col-sm-4">
									<div class="image">
									<img style="margin-top: -15px;" src="<?php echo base_url("uploads/user/".$user_info['image']);?>" class="img-square elevation-2" alt="User Image" width="350px" height="300px"/>
								</div>
								</div>
								<div class="col-sm-8">
									<div class="matter">
										<label>FULL NAME 
										<button type="submit" value="Submit" class="icon"> </button>
										</label>
										<span><?php echo @$user_info['name']; ?></span>
									</div>	
									<div class="matter">
										<label>GENDER
										<button type="submit" value="Submit" class="icon" ></i></button>
										</label>
										<span><?php echo @$user_info['gender']; ?></span>
									</div>	
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="matter">
										<label>MOBILE NUMBER
										<button type="submit" value="Submit" class="icon" ></button>
										</label>
										<span><?php echo @$user_info['contact_no']; ?></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="matter">
										<label>PROFESSIONAL SKILLS
										<button type="submit" value="Submit" class="icon" ></button>
										</label>
										<span><?php echo @$user_info['skill_name']; ?></span>
										<span></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="matter">
										<label>EXPERIENCE
										<button type="submit" value="Submit" class="icon" ></button>
										</label>
										<span><?php echo $user_info['exper_req'] ?> </span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="matter">
										<label>EDUCATION
										<button type="submit" value="Submit" class="icon" ></button>
										</label>
										<span><?php echo $user_info['education_name'] ?></span>
									</div>
								</div>
							</div>
						</fieldset>
						</form>
						</div>
					</div>

					<div class="tab-pane" id="applied">
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
											<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 
												<?php echo $value['location_name']; ?> 
											</a>
										</li>
									</ul>
									<p>There are many variations of passages of lorem Ipsum available [...]</p>
								</div>
								<button type="button" class="btn btn-info" onclick="location.href='<?php echo site_url('list_detail_page/index');?>'">VIEW MORE</button>
						<button type="button" class="btn btn-info" onclick="location.href='<?php echo site_url('apply_job_form/index/'.$value['job_id']);?>'">APPLY NOW</button>
							</div>
						</div>
						<?php } ?>
						
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
					<!-- <div class="tab-pane" id="post">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="product-box profile">
								<div class="image">
									<a href="jobs.html">
										<img class="img-responsive" src="<?php echo base_url('assets/images/new/13.jpg')?>" alt="p1" title="p1"/>
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
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="product-box profile">
								<div class="image">
									<a href="jobs.html">
										<img class="img-responsive" src="<?php echo base_url('assets/images/new/14.jpg')?>" alt="p2" title="p2"/>
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
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="product-box profile">
								<div class="image">
									<a href="jobs.html">
										<img class="img-responsive" src="<?php echo base_url('assets/images/new/15.jpg')?>" alt="p3" title="p3"/>
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
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="product-box profile">
								<div class="image">
									<a href="jobs.html">
										<img class="img-responsive" src="<?php echo base_url('assets/images/new/16.jpg')?>" alt="p4" title="p4"/>
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
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="product-box profile">
								<div class="image">
									<a href="jobs.html">
										<img class="img-responsive" src="<?php echo base_url('assets/images/new/17.jpg')?>" alt="p1" title="p1"/>
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
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="product-box profile">
								<div class="image">
									<a href="jobs.html">
										<img class="img-responsive" src="<?php echo base_url('assets/images/new/18.jpg')?>" alt="p2" title="p2"/>
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
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="product-box profile">
								<div class="image">
									<a href="jobs.html">
										<img class="img-responsive" src="<?php echo base_url('assets/images/new/19.jpg')?>" alt="p3" title="p3"/>
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
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="product-box profile">
								<div class="image">
									<a href="jobs.html">
										<img class="img-responsive" src="<?php echo base_url('assets/images/new/20.jpg')?>" alt="p4" title="p4"/>
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
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="product-box profile">
								<div class="image">
									<a href="jobs.html">
										<img class="img-responsive" src="<?php echo base_url('assets/images/new/21.jpg')?>" alt="p1" title="p1"/>
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
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="product-box profile">
								<div class="image">
									<a href="jobs.html">
										<img class="img-responsive" src="<?php echo base_url('assets/images/new/22.jpg')?>" alt="p2" title="p2"/>
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
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="product-box profile">
								<div class="image">
									<a href="jobs.html">
										<img class="img-responsive" src="<?php echo base_url('assets/images/new/23.jpg')?>" alt="p3" title="p3"/>
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
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="product-box profile">
								<div class="image">
									<a href="jobs.html">
										<img class="img-responsive" src="<?php echo base_url('assets/images/new/24.jpg')?>" alt="p4" title="p4"/>
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
					</div> -->
					</div>
					</div> 
				</div>
			</div>
		</div>
	</div>
<!-- job end here -->
<!-- Footer start here -->
<?php
	$this->load->view('footer');
?>