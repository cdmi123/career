<?php 
	$this->load->view('header');
?>
<!-- company page start here -->
<div class="company_page">
    <div class="company_search"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
               <!-- <div class="image">
               <center> <img src="<?php //echo base_url('./uploads/company/'.$company['image']) ?>"  alt="profile" title="profile" class="img-responsive"/>
                    <h4><b><?php //echo $company['company_name'] ?></b></h4>
                    </center>
                </div> -->
              <!--   <div class="col-sm-offset-4 col-sm-8 detail_search">
                    <div class="search">
                        <div class="input-group">
                            <input placeholder="Search for anything here" id="search" name="search" value="" class="form-control" type="text">
                            <div class="input-group-btn">
                                <button class="btn btn-default btn-lg" type="submit"><i class="fa fa-search" aria-hidden="true"></i> </button>
                            </div>
                        </div>	
                    </div>
                </div> -->
                <div class="banner">
                    <img src="<?php echo base_url('./uploads/company/'.$company['image']) ?>" alt="profile" title="profile" class="img-responsive"/>
                    <div class="heading-detail">
                       
                       
                    </div>
                    <div class="bread-crumb">
                        <ul class="list-inline">
                            <li><a href="<?php echo site_url('home/index') ?>"> Home</a></li>
                            <li><a href="<?php echo site_url('comapny_page/index') ?>">Company Page</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12 contactinfo">
                <h4><i class="icofont icofont-address-book"></i> Contact Info</h4>
                <div class="col-sm-12 bg">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone"></i> +90 123 456 789</li>
                        <li><i class="fa fa-globe"></i> www.jobplacemart.com</li>
                        <li><i class="fa fa-envelope"></i> jobplacemart@gmail.com</li>
                        <li><i class="fa fa-map-marker"></i> London, Main Street, Nr 08</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

	<div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="number-box col-sm-12">
                    <ul class="list-inline">
                        <li>
                        	<span class="icofont icofont-meeting-add"></span>
                        	<h5>Number of Job Posted</h5>
                        	<hr>
                        	<h4><?php echo $tot_job ?></h4>
                        	<a href="<?php echo site_url('jobs/index') ?>">View posted job<i class="icofont icofont-arrow-right"></i> </a> 
                        </li>
                        <li>
                        	<span class="icofont icofont-handshake-deal"></span>
                        	<h5>Number of Hiring</h5>
                        	<hr>
                        	<h4><?php echo $jobpost['num_vacancy'] ?></h4>
                        </li>
                        <li>
                        	<span class="icofont icofont-company"></span>
                        	<h5>Number of Employees</h5>
                        	<hr>
                        	<h4><?php echo $tot_emp ?></h4>
                        	
                        </li>
                        <li>
                        	<span class="iconfont icofont-presentation"></span>
                        	<h5>Working Environment</h5>
                        	<hr>
                        	<p><i class="fa fa-check-circle"></i> Very beneficial and advantageous</p>
                        	<p><i class="fa fa-check-circle"></i> Very beneficial and advantageous</p>
                        	<p><i class="fa fa-check-circle"></i> Very beneficial and advantageous</p>
                        	<p><i class="fa fa-check-circle"></i> Very beneficial and advantageous</p>
                        </li>
                    </ul>
                </div>
                <div class="description-block col-sm-12">
                    <div class="heading">Description</div>
                    <div class="description-box">
                        <h3><?php echo $company['company_name'] ?></h3>
                        
                        <p><?php echo $company['company_details'] ?></p>
                       
                    </div>
                </div>
            </div>
        </div>
	</div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3423.1432228188287!2d75.87981636513577!3d30.910620581575493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d30.9100544!2d75.8833152!4m5!1s0x391a83a410b99833%3A0xbe41bee863220706!2sthemultimediadesigner+map!3m2!1d30.911209!2d75.879993!5e0!3m2!1sen!2sin!4v1540202992285" width="600" height="170"  style="border:0" allowfullscreen></iframe>
    </div>
</div>
<!-- list view end here -->

<!-- footer start here -->
<footer class="footer2">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-xs-12 latestblog">
				<h4>Latest From The Blog</h4>
				<h6>Michigan</h6>
				<span>United States Calabases, Calafonia</span>
				<p>"I was thankful I hired this The Multimedia Designer, when someone else was unable to complete the job. I'm so happy with my new website. Thank you so much."</p>
			</div>
			<div class="col-sm-3 col-xs-12 latestlink">
				<h4>Latest Links</h4>
				<ul class="list-unstyled">
					<li><a href="<?php echo site_url('home/index'); ?>">Homepage</a></li>
					<li><a href="<?php echo site_url('submit_job/index'); ?>">Submit Job</a></li>
					<li><a href="candidate-grid-view.html">All Candidates</a></li>
					<li><a href="<?php echo site_url('blog/index'); ?>">Latest Blogs</a></li>
					<li><a href="<?php echo site_url('jobs/index'); ?>">Jobs</a></li>
				</ul>
			</div>
			<div class="col-sm-3 col-xs-12 keepup">
				<h4>Keep Up To Date</h4>
				<ul class="list-unstyled">
					<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i> Facebook</a></li>
					<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i> Twitter</a></li>
					<li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i> Instagram</a></li>
					<li><a href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i> Linkedin</a></li>
				</ul>
			</div>
			<div class="col-sm-3 col-xs-12 contactus">
				<h4>Contact Us</h4>
				<ul class="list-unstyled">
					<li><i class="fa fa-phone"></i> +90 123 456 789</li>
					<li><i class="fa fa-globe"></i> www.jobportal175jw.com</li>
					<li><i class="fa fa-envelope"></i> contact@jobportal.com</li>
					<li><i class="fa fa-map-marker"></i> London, Main Street, Nr 08</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<div class="powered">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<form name="subscribe" class="subscribe">
					<div class="form-group">
						<div class="input-group">
							<input type="text" placeholder="Enter your Email Address" id="subscribe_email1" name="subscribe_email" value="" class="form-control">
							<div class="input-group-btn">
								<button class="btn btn-default btn-lg" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> SUBSCRIBE</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-6 text-right">
				<p>Copyright © 2018. All Rights Reserved</p>
			</div>
		</div>
	</div>
</div>
<!-- footer end here -->
<!-- jquery -->
<script src="<?php echo base_url('assets/js/jquery.2.1.1.min.js')?>"></script>
<!-- bootstrap js -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<!--bootstrap select-->
<script src="<?php echo base_url('assets/js/dist/js/bootstrap-select.js')?>"></script>
<!-- owlcarousel js -->
<script src="<?php echo base_url('assets/js/owl-carousel/owl.carousel.min.js')?>"></script>
<!--internal js-->
<script src="<?php echo base_url('assets/js/internal.js')?>"></script>
<!-- color switcher-->
<script src="<?php echo base_url('assets/js/switcher.js')?>"></script>
</body>

<!-- Mirrored from ocsolutions.co.in/html/jobportal/company-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Jan 2020 05:54:31 GMT -->
</html>
