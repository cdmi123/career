<?php
	$this->load->view('header');
?>
<!-- login start here -->
<!-- login end here -->
<!-- login-form start here -->

	<div id="login-form">
		<div class="container">
			<div class="row">
			

				<div class="col-sm-offset-2 col-md-8 col-sm-8  col-xs-12">
					<div class="form">
						<div class="border"></div>
						<div class="border1"></div>
						
						 <p class="login-box-msg" style="color:red;font-weight:bold"><?php echo @$error; ?></p>
					    <div style="color:red">
			                <?php echo @$msg; ?>
			              </div>

						<form class="form-horizontal" method="post">
							<fieldset>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Email Id</label>
										<input type="email" class="form-control" placeholder="Email" name="email">
									</div>
								</div>
								<div class="button">
									<button type="submit" value="Submit" class="btn btn-primary btnus">Submit</button>
								</div>
								 <a href="<?php  echo site_url('login/index'); ?>"><b><center>Login</center></b></a>
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