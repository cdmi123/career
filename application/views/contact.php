<?php
	$this->load->view('header');
?>

<!-- contact start here -->
	<div id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- contact-content start here -->
					<div class="contact-content">
						<h1>Contact Us</h1>
						<ul class="list-inline">
							<li>
								<a href="<?php echo site_url('home/index'); ?>">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="<?php echo site_url('contact/index'); ?>">Contact us</a>
							</li>
						</ul>
					</div>
				<!-- contact-content end here -->
				</div>
			</div>
		</div>
	</div>
<!-- contact end here -->


<!-- contact-form start here -->
	<div id="contact-form">
		<div class="container">
			<div class="row">

				<div class="col-md-8 col-sm-8 col-xs-12">
					<!-- form start here -->
					<div class="form">
						<div class="border"></div>
						<div class="border1"></div>
						 <?php
			                if(form_error('name'))
			                {
			                  $msg = form_error('name');
			                }
			                  elseif(form_error('email'))
			                  {
			                  	$msg=form_error('email');
			                  }
							elseif(form_error('subject'))
			                  {
			                  	$msg=form_error('subject');
			                  }
			              	elseif(form_error('message'))
			                  {
			                  	$msg=form_error('message');
			                  }


			                
			              	?>
				              <div style="color:red">
				                <?php echo @$msg; ?>
				              </div>
						<form class="form-horizontal" method="post">
							<fieldset>
								<div class="form-group">
									<div class="col-sm-6">
										<label>Your Name</label>
										<input class="form-control" placeholder="Enter your name" id="name" value="<?php echo $info['name']?>" name="name" required="" type="text">
									</div>
									<div class="col-sm-6">
										<label>Your Email</label>
										<input class="form-control" id="input-email" placeholder="you@yourdomain.com" value="<?php echo $info['email']?>" name="email" required="" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Subject</label>
										<input class="form-control" id="subject" placeholder="" value="<?php echo $info['subject']?>" name="subject" required="" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Message</label>
										<textarea class="form-control" id="message" rows="10" name="message" placeholder="you can place the message" required=""><?php echo $info['message'] ?></textarea>
									</div>
								</div>
								
								
								<div class="button">
									<button type="submit" value="Submit" class="btn btn-primary btnus">SEND MESSAGE</button>
								</div>
							</fieldset>
						</form>
					</div>
					<!-- form end here -->
				</div>
				
				<div class="col-md-4 col-sm-4 col-xs-12">
					<!-- detail start here -->
					<div class="detail col-md-12">
						<div class="border"></div>
						<div class="border1"></div>
						<ul class="list-unstyled">
							<li>
								<h5>Address</h5>
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<a href="<?php echo site_url('contact/index'); ?>"><span>123 Main Street,Anytown,SURAT 396006 INDIA</span></a>
							</li>
							<li>
								<h5>Phone</h5>
								<i class="fa fa-phone" aria-hidden="true"></i>
								<a href="<?php echo site_url('contact/index'); ?>"><span>+1902-423-1234</span></a>
							</li>
							<li>
								<h5>Email</h5>
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<a href="<?php echo site_url('contact/index'); ?>"><span>jobplacemart@gmail.com</span>
								</a>
							</li>
							<li>
								<h5>Skype</h5>
								<i class="fa fa-skype" aria-hidden="true"></i>
								<a href="<?php echo site_url('contact/index'); ?>"><span>Jobs.2020</span></a>
							</li>
						</ul>
					</div>
					<!-- detail end here -->
					<img src="<?php echo base_url('assets/images/support.jpg')?>" class="img-responsive" alt="support" title="support">
				</div>
				
			</div>
		</div>
		
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d283187.08944592864!2d72.65622366619252!3d21.160475246176016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1592117828932!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
		
	</div>
<!-- contact-form end here -->

<?php
	$this->load->view('footer');
?>