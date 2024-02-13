<?php
	$this->load->view('header');
?>
<!-- slider start here -->
	<div class="slideshow owl-carousel">
		<?php 
				foreach ($slider as $value) {
								
			?>
		<div class="item">
			<img src="<?php echo base_url('./uploads/slider/'.$value['image']) ?>" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
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
			</div>
		</div>
	<?php }?>
		
	</div>
<!-- slider end here -->

<!-- featured start here -->
	<div id="featured">
		<div class="container">
			<div class="row">
				<!-- featured-jobs start here -->
				<div class="featured-jobs">
					<h1>FEATURED JOBS</h1>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- featured-jobs end here -->
				
				<?php 
					foreach ($jobpost as $value) {		
				?>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="product-box">
						<div class="image">
							<a href="<?php echo site_url('jobs/index');?>" >
								<img src="<?php echo base_url('./uploads/company/'.$value['image']) ?>"  alt="jobpost" class="img-responsive" style="max-height: 150px;min-height: 150px;"/>
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
		</div>	
	</div>

		
<!-- featured end here -->

<!-- browse start here -->
	<div class="browse">
		<div class="container">
			<div class="row">
				<!-- featured-jobs start here -->
				<div class="browse-jobs">
					<h1>BROWSE JOBS</h1>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- featured-jobs end here -->
				<?php 
				foreach ($info as $value) {
								
				?>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="<?php echo site_url('jobs/index/'.$value['category_id']);?>">
							<div class="boxbor">
								<i class="<?php echo $value['icon'] ?>" aria-hidden="true"></i>
								<span><?php echo $value['category_name']; ?></span>
							</div>
						</a>
					</div>	
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
<!-- browse end here -->

<!-- testimonial start here -->
	<div id="testimonial">
		<div class="container">
			<div class="row">
				<!-- testimonial-jobs start here -->
				<div class="testimonial-jobs">
					<h1>TESTIMONIAL</h1>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- testimonial-jobs end here -->
			
				<div id="testimonials" class="col-md-12 col-sm-12 col-xs-12 owl-carousel">
					
					<?php  
						foreach ($test as  $value) {
					?>
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="<?php echo base_url('./uploads/company/'.$value['image']) ?>" class="img-responsive" alt="pic-1" title="pic-1" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p><?php echo $value['review'] ?></p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<!-- testimonial end here -->

<div id="blog">
		<div class="container">
			<div class="row">
				<!-- latest-blog start here -->
				<div class="latest-blog">
					<h1>Latest Blog</h1>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- latest-blog end here -->
				<div class="col-md-6 col-sm-6 col-xs-12">
					<!-- box start here -->
					<div class="box">
						<a href="<?php echo site_url('blog/index') ?>">
							<img src="<?php echo base_url('assets/images/b1.png')?>" alt="b1" title="b1" class="img-responsive" style="max-height: 200px;min-height:200px; min-width:200px ;max-width:200px; "/>
						</a>
						<div class="matter">
							<h1>Getting rejected from a job opportunity </h1>
							<p>you’re excited about can be detrimental to your confidence in your job search. The application and interview stages are usually quite a process and ...</p>
							<a href="<?php echo site_url('blog/index')?>">Read more	<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<!-- box end here -->
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<!-- box start here -->
					<div class="box">
						<a href="<?php echo site_url('blog/index') ?>">
							<img src="<?php echo base_url('assets/images/b2.jpg')?>" alt="b2" title="b2" class="img-responsive" style="max-height: 200px;min-height:200px; min-width:200px ;max-width:200px;"/>
						</a>
						<div class="matter">
							<h1>The 10 Golden Rules of Working With a Recruiter</h1>
							<p>Working with a good recruiter is an excellent option for both passive and active job seekers. Recruiters can ...</p>
							<a href="<?php echo site_url('blog/index')?>">Read more	<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<!-- box end here -->
				</div>
				
		</div>
	</div>

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
				<div id="partners" class="owl-carousel" width="100px">
					<div class="item">
						<a href="https://phoenixgames.in/">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 ">
							<img src="<?php echo base_url('assets/images/phoenix.png')?>" class="img-circle elevation-10" height="100px" width="100px" alt="l1" title="l1" />
						</div>
					</a>
					</div>
					<div class="item">
						<a href="http://havbyte.com/">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="<?php echo base_url('assets/images/hav.png')?>" class="img-circle elevation-2" height="90px" width="90px" alt="l2" title="l2" />
						</div>
					</a>
					</div>
					<div class="item">
						<a href="https://jksol.com/">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="<?php echo base_url('assets/images/jksol.png')?>" class="img-circle elevation-2" height="90px" width="90px" alt="l3" title="l3" />
						</div>
					</a>
					</div>
					<div class="item">
						<a href="https://www.narolainfotech.com/">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="<?php echo base_url('assets/images/narola.jpg')?>" class="img-circle elevation-2" height="90px" width="90px" alt="l4" title="l4" />
						</div>
					</a>
					</div>
					<div class="item">
						<a href="https://www.coruscatesolution.com/">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="<?php echo base_url('assets/images/coruscat.jpg')?>" class="img-circle elevation-2" height="90px" width="90px" alt="l5" title="l5" />
						</div>
					</a>
					</div>
					<div class="item">
						<a href="http://redsun-infotech.com/">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="<?php echo base_url('assets/images/redsun.jpg')?>" class="img-circle elevation-2" height="90px" width="90px" alt="l1" title="l1" />
						</div>
					</a>
					</div>
					<div class="item">
						<a href="https://truelinesolution.com/">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="<?php echo base_url('assets/images/trueline.jpg')?>" class="img-circle elevation-2" height="90px" width="90px" alt="l2" title="l2" />
						</div>
					</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- partner end here -->

<?php

	$this->load->view('footer');

?>