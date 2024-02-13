<?php 
	$this->load->view('header');
?>
<!-- jobs start here -->
	<div id="jobs">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- about-content start here -->
					<div class="jobs-content canditate">
						<h1>CANDIDATES</h1>
						<ul class="list-inline">
							<li>
								<a href="<?php echo site_url(' home/index')?>">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="<?php echo site_url(' candidate_list_view/index')?>">Candidates</a>
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
			<!-- <div class="col-md-12 col-sm-12 col-xs-12 form1">
				<div class="slider-caption">
						<form method="post" action="<?php //echo site_url('jobs/search');?>">
						<div class="off"></div>
						<h1>Find Your Job</h1>
						<div class="col-md-4 col-sm-4 col-xs-12 paddleft">
							<select name="category" class="selectpicker form-control">
								<option value="">All Category</option>
								<?php
									//foreach ($info as  $v) 
									{
								?>
								<option value="<?php //echo $v['category_id'] ?>"><?php //echo $v['category_name'] ?></option>
								<?php
									}
								?>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select name="location" class="selectpicker form-control">
								<option value="">Select Location</option>
								<?php
									//foreach ($info1 as  $v) 
									{
								?>
								<option value="<?php //echo $v['location_id'] ?>"><?php //echo $v['location_name'] ?></option>
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
					
			</div> -->
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12 hidden-xs">
					<div class="left">
						<div class="job-candidate">
							<h1>FEATURED CANDIDATES</h1>
							<div class="border"></div>
							<div class="border1"></div>
						</div>
						<div id="latestsfeat" class="owl-carousel">
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="<?php echo base_url('assets/images/cand-1.png')?>" class="img-responsive" alt="cand-1" title="cand-1" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>	
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="<?php echo base_url('assets/images/cand-2.png')?>" class="img-responsive" alt="cand-2" title="cand-2" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="<?php echo base_url('assets/images/cand-3.png')?>" class="img-responsive" alt="cand-3" title="cand-3" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="<?php echo base_url('assets/images/cand-4.png')?>" class="img-responsive" alt="cand-4" title="cand-4" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="<?php echo base_url('assets/images/cand-5.png')?>" class="img-responsive" alt="cand-5" title="cand-5" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="<?php echo base_url('assets/images/cand-6.png')?>" class="img-responsive" alt="cand-6" title="cand-6" />
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
							<img src="<?php echo base_url('assets/images/new/01.jpg')?>" alt="p1" title="p1" />
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
							<img src="<?php echo base_url('assets/images/new/02.jpg')?>" alt="p2" title="p2" />
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
							<img src="<?php echo base_url('assets/images/new/03.jpg')?>" alt="p3" title="p3" />
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
							<img src="<?php echo base_url('assets/images/new/04.jpg')?>" alt="p4" title="p4" />
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
						<img src="<?php echo base_url('assets/images/left-banner.jpg')?>" title="left-banner" alt="left-banner" class="img-responsive">
					</div>
				</div>
				
				<div class="col-md-9 col-sm-9 col-xs-12">
					<form class="form-horizontal candidate-single" enctype="multipart/form-data" method="post">
						<fieldset>
							<div class="form-group">
								<div class="col-sm-5">
									<img src="<?php echo base_url("uploads/user/".$user['image']);?>" width="350px" height="350px" alt="my_profile" title="my_profile" class="img-responsive">
								</div>
								<div class="col-sm-7">
									<div class="matter">
										<label>FULL NAME</label>
										<span><?php echo $user['name'] ?></span>
									</div>	
									<div class="matter">
										<label>GENDER</label>
										<span><?php echo $user['gender'] ?></span>
									</div>	
								</div>
							</div>
							<!-- <div class="form-group">
								<div class="col-sm-12">
									<div class="matter">
										<label>DATE OF BIRTH</label>
										<span>14 / march / 2017</span>
									</div>
								</div>
							</div> -->
							<div class="form-group">
								<div class="col-sm-12">
									<div class="matter">
										<label>LOCATION</label>
										<span><?php echo $user['address'] ?></span>
									</div>
								</div>
							</div>
							<!-- <div class="form-group">
								<div class="col-sm-12">
									<div class="matter">
										<label>NATIONALITY</label>
										<span>Indian</span>
									</div>
								</div>
							</div> -->
							<div class="form-group">
								<div class="col-sm-12">
									<div class="matter">
										<label>MOBILE NUMBER</label>
										<span><?php echo $user['contact_no'] ?></span>
									</div>
								</div>
							</div>
							<!-- <div class="form-group">
								<div class="col-sm-12">
									<div class="matter">
										<label>HOME PHONE</label>
										<span>0161 1234567	</span>
									</div>
								</div>
							</div> -->
							<div class="form-group">
								<div class="col-sm-12">
									<div class="matter">
										<label>PROFESSIONAL SKILLS</label>
										<span><?php echo $user['skill_name'] ?></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="matter">
										<label>EXPERIENCE</label>
										<span><?php echo $user['exper_req'] ?> </span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="matter">
										<label>EDUCATION</label>
										<table class="table">
											<tr>
												<td><b>DEGREE</b></td>
												<td><b>COLLEGE / SCHOOL</b></td>
												<td><b>PASSED YEAR</b></td>
												<td><b>PERCENTAGE %</b></td>
											</tr>
											<tr>
												<td>Master</td>
												<td>Vnsgu university</td>
												<td>2015</td>
												<td>65 %</td>
											</tr>
											<tr>
												<td>Bachelor</td>
												<td>Vnsgu university</td>
												<td>2013</td>
												<td>75 %</td>
											</tr>
											<tr>
												<td>+2</td>
												<td>Sardar school</td>
												<td>2010</td>
												<td>80 %</td>
											</tr>
											<tr>
												<td>10th</td>
												<td>Sardar school</td>
												<td>2008</td>
												<td>85 %</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="matter">
										<label>MY ADDITIONALS INFORMATION</label>
										<table class="table">
											<tr>
												<td>INTERST : </td>
												<td class="bor">Playing Cricket, Football, Hockey, Gym, Reading Books, Watching Movies. </td>
											</tr>
											<tr>
												<td>CAREER : </td>
												<td class="bor">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div class="button">
								<div class="pull-left">
									<a href="https://api.whatsapp.com/send?phone=<?php echo $user['contact_no'] ?>&text=Hi,I am" class="btn btn-primary btnus">CONTACT ME</a>
								</div>
								
							</div>
						</fieldset>
					</form>
				</div>

				<div class="col-md-12 col-sm-12 col-xs-12 padd0">
					<!-- similar-jobs start here -->
					<div class="similar-candidate">
						<h1>Similar candidates</h1>
						<div class="border"></div>
						<div class="border1"></div>
					</div>
					<!-- similar-jobs end here -->

					<?php 
						foreach ($user1 as $value) {		
						?>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<div class="product-box candidate">
							<div class="image">
								<a href="candidate-grid-view.html">
									<img class="img-responsive" src="<?php echo base_url('./uploads/user/'.$value['image']) ?>" alt="img1" title="img1"/>
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
								<h1><?php echo $value['name'] ?> 
									<button type="button" class="rotate1">
										<i class="fa fa-link" aria-hidden="true"></i>
									</button>
								</h1>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i>  <?php echo $value['education_name'] ?></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i>  <?php echo $value['skill_name'] ?></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $value['address'] ?></a>
									</li>
								</ul>
								<p>There are many variations of passages of lorem Ipsum available [...]</p>
							</div>
							<button type="button" class="btn btn-info" onclick="location.href='<?php echo site_url('candidate_single_view/index/'.$value['id'])?>'">VIEW MORE</button>
						</div>
					</div>
					<?php } ?>
				</div>
			
			</div>
		</div>
	</div>
<!-- abouts end here -->
<?php 
	$this->load->view('footer');
?>