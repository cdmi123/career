<?php
  $this->load->view('header');
?>



<!-- login start here -->
  <div id="login">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <!-- login-content start here -->
          
        <!-- login-content end here -->
        </div>
      </div>
    </div>
  </div>
<!-- login end here -->
<!-- login-form start here -->
  <div id="login-form">
    <div class="container" >
      <div class="login-content">
        <h1><center>Edit Profile</center></h1>
      </div>
      <div class="row">
        <div class="col-sm-offset-2 col-md-8 col-sm-8 col-xs-12">
          <div class="form">
            <div class="border"></div>
            <div class="border1"></div>
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <fieldset>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label>Username</label>
                    <input class="form-control" id="input-username" placeholder="Enter your username" value="<?php echo $info['name']?>"name="name" required="" type="text">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-12">
                    <label>Email</label>
                    <input class="form-control" id="input-email" placeholder="Type your email address" value="<?php echo $info['email']?>" name="email" required="" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label>Password</label>
                    <input class="form-control" id="input-password" placeholder="Type your password" value="<?php echo $info['password']?>" name="password" required="" type="password">
                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" class="form-control" id="exampleInputFile" name="image"
                        value="<?php echo $info['image']?>">
                        <!-- <label class="custom-file-label" for="exampleInputFile">Choose file</label> -->
                </div>
                      
                <div>
                    <img height="100px" width="100px" src="<?php echo base_url('uploads/user/'.@$info['image']);?>">
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                      <label>Contact no.</label>
                        <input class="form-control" id="input-contact_no" type="text" name="contact_no" value="<?php echo $info['contact_no']?>" placeholder="Enter your mobileno.">
                  </div>
               </div>
                        
                <div class="form-group">
                  <div class="col-sm-12">
                    <label>Address</label>
                    <textarea class="form-control" rows="3" cols="3" name="address" placeholder="type your address" required=""><?php echo $info['address']?></textarea>
                  </div>
                </div>
               
             
                <div class="">
                    <div class="">
                      <label>Gender : </label>
                      <input id="input-gender1" type="radio" value="male" name="gender" <?php if($info['gender']=="male"){ echo "checked";}?>> Male
                      <input id="input-gender" type="radio" value="female" name="gender" <?php if($info['gender']=="female"){ echo "checked";}?>>Female
                    </div>
                </div>
                
                 <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputNamel ">Select Skill :</label>
                    <select name="select_skill"  class="form-control"> 
                      <option value="">Select Skill</option>
                      <?php
                        foreach ($skill as $value) 
                        {
                      ?>
                        <option value="<?php echo $value['skill_id'] ?>" <?php if($info['skill_id']==$value['skill_id']){ echo "selected";}?>><?php echo $value['skill_name'] ?></option>
                        <?php
                          }
                        ?>
                    </select>
                    
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="exampleInputNamel ">Select Education :</label>
                    <select name="select_education"  class="form-control"> 
                      <option value="">Select Education</option>
                      <?php
                        foreach ($education as $value) 
                        {
                      ?>
                        <option value="<?php echo $value['education_id'] ?>" <?php if($info['education_id']==$value['education_id']){ echo "selected";}?>><?php echo $value['education_name'] ?></option>
                        <?php
                          }
                        ?>
                    </select>
                    
                  </div>
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
                </div>
                <div class="button">
                  <center><button type="submit" value="Submit" class="btn btn-primary btnus"> Submit</button></center>
                </div>
                
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