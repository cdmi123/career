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
						<h1>Register</h1>
						<ul class="list-inline">
							<li>
								<a href="<?php echo site_url('home/index'); ?>">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="<?php echo site_url('register/index'); ?>">Register</a>
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
			           if(form_error('name'))
		                {
				             $msg = form_error('name');
				        }
				        else if(form_error('email'))
		                {
		                    $msg = form_error('email');
				        }
			            else if(form_error('password'))
		                {
		                    $msg = form_error('password');
				        }
				        else if(form_error('contact_no'))
		                {
		                    $msg = form_error('contact_no');
				        }
				        else if(form_error('exper_req'))
		                {
		                  $msg = form_error('exper_req');
		                }
		                else if(form_error('select_skill'))
		                {
		                  $msg = form_error('select_skill');
		                }
				        else if(form_error('select_education'))
		                {
		                  $msg = form_error('select_education');
		                }

						       
		         	?>
				     <div style="color:red;font-weight:bold">
				        <?php echo @$msg; ?>
				    </div>
				<div class="col-sm-offset-2 col-md-8 col-sm-8 col-xs-12">
					<div class="form">
						<div class="border"></div>
						<div class="border1"></div>
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
							<fieldset>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Username</label>
										<input class="form-control" id="input-username" placeholder="Enter your username" value="" name="name" required="" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Email</label>
										<input class="form-control" id="input-email" placeholder="Type your email address" value="" name="email" required="" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Password</label>
										<input class="form-control" id="input-password" placeholder="Type your password" value="" name="password" required="" type="password">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Image</label>
										<input class="form-control" value="" name="image" required="" type="file">
									</div>
								</div>
								<div>
                    				<img height="100px" width="100px" src="<?php echo base_url('uploads/user/'.@$user_info['image']);?>">
                				</div>
								<div class="form-group">
									<div class="col-sm-12">
				                    	<label>Contact no.</label>
				                    	<input class="form-control" id="input-contact_no" type="text" name="contact_no" value="" placeholder="Enter your mobileno.">
				                  	</div>
				                 </div>
				                <div class="">
				     				<div class="">
										<label>Gender   : </label>
										 <input id="input-gender" type="radio" value="male" name="gender"> Male
										 <input id="input-gender" type="radio" value="female" name="gender">Female
									</div>
							
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Address</label>
										<textarea class="form-control" rows="4" cols="4" name="address" placeholder="type your address" required=""></textarea>
									</div>
								</div>
								<div class="form-group">
				                    <label for="exampleInputEmail1">Select Skill</label>
				                      <select name="select_skill"  class="form-control">
				                      <option value="">Select Skill</option>
				                      <?php 
				                        foreach ($skill as $value)
				                        {
				                        ?>

				                            <option value="<?php echo $value['skill_id'] ?>" <?php if(@$info['skill_id']==$value['skill_id']) { echo "selected"; } ?>><?php echo $value['skill_name'] ?> </option>
				                      <?php 
				                        }
				                      ?>
				                    </select>
				                  </div>
                 
								 <div class="form-group">
				                    <label for="exampleInputEmail1">Select Education</label>
				                      <select name="select_education"  class="form-control">
				                      <option value="">Select Education</option>
				                      <?php 
				                        foreach ($education as $value)
				                        {
				                        ?>

				                            <option value="<?php echo $value['education_id'] ?>" <?php if(@$info['education_id']==$value['education_id']) { echo "selected"; } ?>><?php echo $value['education_name'] ?> </option>
				                      <?php 
				                        }
				                      ?>
				                    </select>
                  				</div>
                  				<div class="form-group">
				                    <label for="exampleInputEmail1">Experience Requirement</label>
				                    <select name="exper_req"  class="form-control">
				                      <option value="">---Select Requirement---</option>
				                      
				                      <option value="0-6 Months" <?php if($info['exper_req']=='0-6 Months') { echo "selected"; } ?>>0-6 Months</option>
				                      <option value="1 Year" <?php if($info['exper_req']=='1 Year') { echo "selected"; } ?>>1 Year</option>
				                      <option value="2 Year" <?php if($info['exper_req']=='2 Year') { echo "selected"; } ?>>2 Year</option>
				                      <option value="3 Year" <?php if($info['exper_req']=='3 Year') { echo "selected"; } ?>>3 Year</option>
				                      <option value=">5 Year" <?php if($info['exper_req']=='>5 Year') { echo "selected"; } ?>> >5 Year</option>
				                    
				                    </select>
				                  </div>
								<div class="form-group">
									<div class="col-sm-12 confirmation">
										<label>
											<input name="confirmation" value="yes" type="checkbox">By register, I read & accept <a href="#" class="colorLink subHeadingText icon-wrap">the terms</a>
										</label>
									</div>
								</div>
								<div class="button">
									<button type="submit" value="Submit" class="btn btn-primary btnus">REGISTER</button>
								</div>
								<p>Already have an account? <a href="<?php echo site_url('login/index'); ?>">Login</a></p>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- submit-job-form end here -->
<?php
	$this->load->view('footer');
?>