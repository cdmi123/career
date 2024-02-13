 <!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Jan 2020 05:47:24 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Home</title>
<!-- Bootstrap stylesheet -->
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css')?>" rel="stylesheet">
<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700%7CSource+Sans+Pro:300,400,600,700" rel="stylesheet"> 
<!-- stylesheet -->
<link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/css/style_cyan.css')?>" title="style_cyan" rel="alternate stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/css/style_red.css')?>" title="style_red" rel="alternate stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/css/style_green.css')?>" title="style_green" rel="alternate stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/css/style_blue.css')?>" title="style_blue" rel="alternate stylesheet" type="text/css"/>
<!-- font-awesome -->
<link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
<!-- crousel css -->
<link href="<?php echo base_url('assets/js/owl-carousel/owl.carousel.css')?>" rel="stylesheet" type="text/css" />
<!--bootstrap select-->
<link href="<?php echo base_url('assets/js/dist/css/bootstrap-select.css')?>" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- top start here -->
	<div id="top">
		<!-- top container start here-->
		<div class="container">
			<div id="top-links">
				<ul class="list-inline pull-left button">
					<li>
						<a href="<?php echo site_url('about/index'); ?>"><span>ABOUT US</span></a>
					</li>
					<li>
						<a href="<?php echo site_url('contact/index'); ?>"><span>CONTACT US</span></a>
					</li>
					<li>
						<a href="<?php echo site_url('contact/index'); ?>"><span>EMAIL : kevalsavaliya@GMAIL.COM</span></a>
					</li>
				</ul>

				
				
				<ul class="list-inline pull-right icon">
 					
					<?php 
						if(!$this->session->userdata('client_id')){
					?>
					
					<li>
							<a style="color:black;background-color:#FF9900;" class="btn btn-default btn-sm" href="<?php echo site_url('login/index'); ?>">Login</a>
					</li>
					<li>
							<a style="color:black;background-color:#FF9900;" class="btn btn-default btn-sm" href="<?php echo site_url('register/index'); ?>">Sign Up</a>
					</li>
							
					<?php } ?>
					
				</ul>
			</div>
		</div>
		<!-- top container end here-->
	</div>
<!-- top end here -->

<!-- header start here-->
	<header>
		<!-- header container start here-->
		<div class="container" >
			<div class="row">
				<div class="col-xl-3 col-sm-3 col-md-3 col-xs-12">
					<!-- logo start here-->
					<div id="logo">
						<a style="z-index: 555;position: relative;width: 300px;"  href="<?php echo site_url('home/index'); ?>">
							<img class="img-responsive" style="height: 75px;" alt="logo" title="logo" src="<?php echo base_url('assets/logo.jpeg')?>" />
						</a>
					</div>
					
					<!-- logo end here-->
				</div>
				
				<!-- <div class="col-sm-3 col-md-3 col-xs-12 visible-xs paddleft"> -->
					<!-- button-login start here -->
					<!-- <div class="button-login pull-right">
						<button type="button" class="btn btn-default btn-lg" onclick="location.href='<?php //echo site_url('login/index'); ?>'">Login</button><button type="button" class="btn btn-primary btn-lg" onclick="location.href='<?php //echo site_url('submit_job/index'); ?>'">Submit Job</button>
					</div> -->
					<!-- button-login end here -->
				<!-- </div> -->
			    <div class="col-xl-9" style="float: right;">
					<!-- menu start here-->
					<nav class="navbar"  id="menu">
						<div class="navbar-header">
							<span class="menutext visible-xs">Menu</span>
							<button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
						</div>
						<div  class="collapse navbar-collapse navbar-ex1-collapse ">
							<ul class="nav navbar-nav">
								<li class="dropdown">
									<a  href="<?php echo site_url('home/index'); ?>">HOME</a>
								</li>
								<li class="dropdown">
									<a  href="<?php echo site_url('jobs/index'); ?>">JOBS</a>
								</li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">CANDIDATES</a>
									<div class="dropdown-menu animated fadeInDown">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li>
													<a href="<?php echo site_url('candidate_list_view/index'); ?>">candidate list</a>
												</li>
												<li>
													<a href="<?php echo site_url('my_profile/index'); ?>">my profile</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">COMPANY</a>
									<div class="dropdown-menu animated fadeInDown">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<!-- <li>
													<a href="<?php //echo site_url('company_page/index'); ?>">Company Profile</a>
												</li> -->
												<li>
													<a href="<?php echo site_url('company_list/index'); ?>">Company List</a>
												</li>
												<!-- <li>
													<a href="<?php //echo site_url('company_detail/index'); ?>">company detail</a>
												</li> -->
											</ul>
										</div>
									</div>
								</li>
								<!-- <li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">BLOG</a>
									<div class="dropdown-menu animated fadeInDown">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li>
													<a href="<?php //echo site_url('blog/index'); ?>">Blog</a>
												</li>
												<li>
													<a href="<?php //echo site_url('blog_detail/index'); ?>">Blog Detail</a>
												</li>
											</ul>
										</div>
									</div>
								</li> -->
								<li class="dropdown">
									<a  href="<?php echo site_url('contact/index'); ?>">CONTACT US</a>
								</li>
								<li class="dropdown">
									<a  href="<?php echo site_url('about/index'); ?>">ABOUT US
										
									</a>
								</li>



								<?php

									$id = $this->session->userdata('client_id');
									$this->db->where('id',$id);
									$qry = $this->db->get('user');
									$user_info = $qry->row_array();
								?>

								<li class="dropdown">
									 <?php 
								 if($this->session->userdata('client_id')){
								 	?>
								 	<img style="margin-top: -15px;" src="<?php echo base_url("uploads/user/".$user_info['image']);?>" class="img-circle elevation-2" alt="User Image" width="50px" height="50px"/>
		         					<a href="#" style="padding: 0;"><?php echo @$user_info['name']; ?></a>
									<!-- <a data-toggle="dropdown" class="dropdown-toggle" href="#">User Info</a> -->
									<div class="dropdown-menu animated fadeInDown">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li>
													<a href="<?php echo site_url('edit_profile/index')?>">Edit Profile</a>
												</li>
												<li>
													<a href="<?php echo site_url('change_password/index')?>">Change Password</a>
												</li>
												<li>
													<a href="<?php echo site_url('login/logout')?>">Log Out</a>
												</li>
											</ul>
										</div>
									</div>
								<?php } ?>
								</li>
							</ul>
				

						</div>
					</nav>
					<!-- menu end here -->
				</div>
			   
			</div>
		</div>
		<!-- header container end here -->
	</header>
<!-- header end here -->
