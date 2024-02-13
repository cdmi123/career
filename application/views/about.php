<?php
	$this->load->view('header');
?>
<!-- header end here -->
<!-- about start here -->
	<div id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- about-content start here -->
					<div class="about-content">
						<h1>About us</h1>
						<ul class="list-inline">
							<li>
								<a href="<?php echo site_url('home/index'); ?>">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="<?php echo site_url('about/index'); ?>">About us</a>
							</li>
						</ul>
					</div>
				<!-- about-content end here -->
				</div>
			</div>
		</div>
	</div>
<!-- about end here -->
<!-- abouts start here -->
	<div id="abouts">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- about-detail start here -->
					<div class="about-detail">
						<h1>Who we are</h1>
						<p>The job industry is facing a lot of competition along with the growth of society and the need for qualified manpower. Unlike the old days, today there are many options for the same and with the advent of internet this process has become easier and user-friendly. The search for the right job sometimes makes the seekers run here & there and this is where the Placement consultants come in, by acting as a platform between them and the premier hiring companies. But what exactly are such agencies, what is their role and method of working? Moreover, how are they lending a helping hand to millions of career hopefuls in starting with their first job or in career succession? </p>
					</div>	
					<!-- about-detail end here -->
					<!-- inner start here -->
					<div class="row inner">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<img src="<?php echo base_url('assets/images/about.jpg')?>" class="img-responsive" alt="about us" title="about us">
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 paddleft">
							<p>
							A Placement Consultancy or a Recruitment firm acts as a link between the companies that offer jobs in various areas and the job-seekers. They also help reduce the clutter and streamline the manpower hunting for the companies no matter how big or small. They act as a guide to the job-seeker to guide them with their career prospects.
							They work for large, medium, small-scale companies. They have a huge database of job vacancies as per salary offered, experienced or fresher, responsibilities, industry-wise etc.
							Resource-This is built over a period of time. They refer these databases and contact the registered candidates.
							Job seekers contact these agencies through different mediums such as phone calls, emails, direct walk-ins and get themselves registered.

							Then the wait begins for the candidates to get calls from these agencies. Job seekers highly rely on these agencies for the interview calls.</p>
						</div>
					</div>	
					<!-- inner end here -->
					<!-- mission start here -->
					<div class="mission">
						<h1>Our Mission(Role In Placemart)</h1>
						<p>Many companies hire these recruitment firms or agencies to help them find the right qualified candidate to join their company. Job seekers in turn, contact these recruitment firms to apply for the right job. Today, these agencies have expertise in this domain and offer specific solutions for different needs and purposes.
							</p>
					</div>
					<!-- mission end here -->
					<!-- team start here -->
					<div class="team">
						<h1>Our Team</h1>
						
						<ul class="list-inline">
							<?php foreach ($info as $value) {
							
						 ?>
							<li>
								<div class="client">
									<img src="<?php echo base_url('./uploads/admin/'.$value['image']) ?>" class="img-circle elevation-2" alt="image1" title="image1" height="150px" width="150px">
									<h5><?php echo $value['name'] ?></h5>
									<!-- <p>Graphics Designer </p> -->
									<ul class="list-inline soical">
										<li>
											<a href="https://www.facebook.com/" target="_blank">
												<i aria-hidden="true" class="fa fa-facebook"></i>
											</a>
										</li>
										<li>
											<a href="https://twitter.com/" target="_blank">
												<i aria-hidden="true" class="fa fa-twitter"></i>
											</a>
										</li>
										<li>
											<a href="https://plus.google.com/" target="_blank">
												<i aria-hidden="true" class="fa fa-google"></i>
											</a>
										</li>
										<li>
											<a href="https://www.instagram.com/" target="_blank">
												<i aria-hidden="true" class="fa fa-instagram"></i>
											</a>
										</li>
									</ul>
								</div>
							</li>
							
							<?php } ?>
						</ul>
					
					</div>
					<!-- team end here -->
				</div>
			</div>
		</div>
	</div>
<!-- abouts end here -->
<?php
	$this->load->view('footer');
?>