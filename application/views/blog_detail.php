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
						<h1>Blog Detail</h1>
						<ul class="list-inline">
							<li>
								<a href="<?php echo site_url('home/index'); ?>">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="<?php echo site_url('blog_detail/index'); ?>">Blog</a>
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
	<div id="blogs">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-12 padd0">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="blog-detail">
							<div class="image">
								<img src="<?php echo base_url('assets/images/b2.jpg')?>" title="blog-big" alt="blog-big" class="img-responsive">
							</div>
							<div class="content">
								<h1>The 10 Golden Rules of Working With a Recruiter</h1>
								<h5><b>1. Be honest.</b> From start to finish always be honest with your recruiter on what you’re looking for, your salary needs, and other opportunities. A good recruiter will return the favor. Neither party will benefit from dishonesty during the job search.</h5>

								<h5><b>2. Be responsive.</b> If your recruiter calls you, call them back! If your recruiter contacts you, it’s usually for good reason. It may be a job offer, updates, or a new position that needs to be filled yesterday. Commit to being available and responsive throughout your time working with a recruiter.</h5>

								<h5><b>3. Be courteous.</b> Recruiters are working for their clients, but also want to help you in your job search. Try to respect their time and communicate when you have updates or questions. They usually do not have a lot of time to give suggestions on your resume or where to look for positions. However, a good recruiter will coach you on their clients process and be an advocate for you.</h5>

								<h5><b>4. Be available.</b> Recruiting is a very time sensitive industry. A client could call and ask to interview you that day.  While this isn’t always possible, if you’re serious about your job search, try and be accommodating and available to ease the process.</h5>

								<h5><b>5. Be proactive.</b> Just because you met with a recruiter doesn’t mean you can sit back and stop your job search. If you’re unemployed or need a new job ASAP, you should continue to work on your job hunt and don’t rely 100% on recruiters.</h5>

								<h5><b>6. Stay in touch.</b> Perhaps you took a 3 month contract job, make sure near the end of your contract you let your recruiter know what you’re looking to do and they can keep you in mind for future positions. Recruiters work with hundreds of candidates at a time and won’t always know when you’re available so stay in touch.</h5>

								<h5><b>7. Be ethical.</b>  If you have signed an agreement with a particular recruiter, make sure you understand the agreement and ask any questions you might have.</h5>

								<h5><b>8. Be prepared.</b> Before you even start connecting with recruiters, have your best resume prepped, practice your interview skills and know what you’re looking for. The more prepared you are the faster a recruiter can get you in process for open positions.</h5>

								<h5><b>9. Be decisive.</b> Before an offer comes, be prepared to accept or decline it. One of the most detrimental things you can do to your opportunities is waiting to make a decision. The client may get offended at waiting or another candidate may join the process and your offer will expire.</h5>

								<h5><b>10. Be open.</b> Your recruiter might share opportunities you hadn’t initially pictured yourself interested in. Perhaps you were thinking large corporate but an awesome opportunity that fit your background opened at a small firm. Be open to new opportunities so that your recruiter will not rule you out before you even get to hear about the role.</h5>
								<p>Ready to put these rules to the test? Connect with our recruiters today by applying to one of our open marketing, creative and IT jobs in MN!</p>
							</div>
							<div class="comment col-md-12 col-sm-12 col-xs-12">
								<ul class="list-inline pull-left">
									<li><a href="#">By Admin</a></li>
									<li><a href="#">By June 09, 2020</a></li>
								</ul>
								<!-- <ul class="list-inline pull-right">
									<li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 632 Views</a></li>
									<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 27 Comments</a></li>
								</ul> -->
							</div>	
							<!-- <div class="tags col-md-12 col-sm-12 col-xs-12">	
								<ul class="list-inline pull-left">
									<li><i class="fa fa-tags" aria-hidden="true"></i>
									TAGS :</li>
									<li><a href="blog.html">Marketing</a></li>
									<li><a href="blog.html">Designer</a></li>
									<li><a href="blog.html">Jobs</a></li>
									<li><a href="blog.html">Creative</a></li>
								</ul>
								<ul class="list-inline pull-right">
									<li><span>SHARE <i class="fa fa-share-alt-square" aria-hidden="true"></i></span>
									 </li>
								</ul>
							</div> -->	
							<div class="commentbox col-md-12 col-sm-12 col-xs-12 padd0">
								<h3>Comments</h3>
								<?php
									foreach ($info as $value) {		

								?>
									<ul class="list-unstyled">
										<li>
											<img src="<?php echo base_url('./uploads/user/'.$value['image'])?>" alt="user" title="user" class="img-circle elevation-2"  width="50px" height="50px" style="margin-top: -15px;"/>
											<div class="profile">
												<h5><?php echo $value['name'] ?></h5>
												<p><?php echo $value['message'] ?></p>
												<ul class="list-inline pull-left replybox">
													
												</ul>
											</div>
											
										</li>

									<?php } ?>
										
									</ul>
									
									<!-- <div class="form col-md-12 col-sm-12 col-xs-12">
										<div class="border"></div>
										<div class="border1"></div>
										<form class="form-horizontal" method="post">
											<fieldset>
												<div class="form-group">
													<div class="col-sm-6">
														<label>First Name</label>
														<input class="form-control" placeholder="Type your first name" id="input-name" value="" name="jobname" required="" type="text">
													</div>
													<div class="col-sm-6">
														<label>Your Email</label>
														<input class="form-control" id="input-email" placeholder="Enter your email address" value="" name="email" required="" type="text">
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-12">
														<label>Comment</label>
														<textarea class="form-control" id="input-enquiry" rows="10" name="enquiry" placeholder="" required=""></textarea>
													</div>
												</div>
												<div class="button">
													<button type="submit" value="Submit" class="btn btn-primary btnus">SUBMIT</button>
												</div>
											</fieldset>
										</form>
									</div> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 hidden-xs">
					<div class="rightside">
						<div class="border"></div>
						<div class="search">
							<input name="s" value="" placeholder="Search" type="text">
							<button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
						</div>
						<div class="latest-post">
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
						
						<div class="career">
							<img src="<?php echo base_url('assets/images/blog-banner.jpg')?>" title="blog-banner" alt="blog-banner" class="img-responsive bannerchange">
						</div>
					</div>
					<div class="archive col-md-12 col-sm-12 col-xs-12">
						<h1>ARCHIVES</h1>
						<div class="border"></div>
						<div class="border1"></div>
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<p class="pull-left">Jan 2020</p>
									<span class="pull-right">(25)</span>
								</a>
							</li>
							<li>
								<a href="#">
									<p class="pull-left">Feb 2020</p>
									<span class="pull-right">(150)</span>
								</a>
							</li>
							<li>
								<a href="#">
									<p class="pull-left">Mar 2020</p>
									<span class="pull-right">(256)</span>
								</a>
							</li>
							<li>
								<a href="#">
									<p class="pull-left">April 2020</p>
									<span class="pull-right">(392)</span>
								</a>
							</li>
							<li>
								<a href="#">
									<p class="pull-left">May 2020</p>
									<span class="pull-right">(551)</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="tag col-md-12 col-sm-12 col-xs-12">
						<h1>TAGS</h1>
						<div class="border"></div>
						<div class="border1"></div>
						<ul class="list-inline">
							<li>
								<a href="<?php echo site_url('blog/index'); ?>">Marketing</a>
							</li>
							<li>
								<a href="<?php echo site_url('blog/index'); ?>">Designer</a>
							</li>
							<li>
								<a href="<?php echo site_url('blog/index'); ?>">Jobs</a>
							</li>
							<li>
								<a href="<?php echo site_url('blog/index'); ?>">Creative</a>
							</li>
							<li>
								<a href="<?php echo site_url('blog/index'); ?>">Jobs</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- abouts end here -->
<!-- Footer start here -->
<?php
	$this->load->view('footer');
?>
