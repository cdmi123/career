<?php
	$this->load->view('header');
?>
<!-- login start here -->
	<div id="login">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- login-content start here -->
					<div class="login-content">
						<h1>Login</h1>
						<ul class="list-inline">
							<li>
								<a href="<?php echo site_url('index-2'); ?>">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="<?php echo site_url('login/index'); ?>">Login</a>
							</li>
						</ul>
					</div>
				<!-- login-content end here -->
				</div>
			</div>
		</div>
	</div>
<!-- login end here -->
<!-- login-form start here -->

	<div id="login-form">
		<div class="container">
			<div class="row">
					<?php
			           if(form_error('email'))
		                {
				             $msg = form_error('email');
				        }
			            else if(form_error('password'))
		                {
		                    $msg = form_error('password');
				        }
		         	?>
				     


				<div class="col-sm-offset-2 col-md-8 col-sm-8  col-xs-12">
					<div class="form">
						<div class="border"></div>
						<div class="border1"></div>
						<div style="color:red;font-weight:bold">
				        <?php echo @$msg; ?>
				    </div>
						<form class="form-horizontal" method="post">
							<fieldset>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Email Id</label>
										<input class="form-control" id="input-email" placeholder="Enter your email id" value="" name="email" required="" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Password</label>
										<input class="form-control" id="input-password" placeholder="Enter your password" value="" name="password" required="" type="password">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12 confirmation">
										<label>
											<input name="confirmation" value="yes" type="checkbox">Remember me
										</label>
										<a href="<?php echo site_url('forgot_password/index') ;?>" class="colorLink subHeadingText icon-wrap pull-right">Forgot password?</a>
									</div>
								</div>
								<div class="button">
									<button type="submit" value="Submit" class="btn btn-primary btnus">LOGIN</button>
								</div>
								<p>Don't have an account? <a href="<?php echo site_url('register/index'); ?>">Register</a></p>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- login-form  end here -->
<?php
	$this->load->view('footer');
?>