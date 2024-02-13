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
            <h1>Change Password</h1>
            <ul class="list-inline">
              <li>
                <a href="<?php echo site_url('home/index'); ?>">Home</a>
              </li>
              <li>></li>
              <li>
                <a href="<?php echo site_url('change_password/index'); ?>">Change Password</a>
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
           if(form_error('current_password'))
           {
              $msg = form_error('current_password');
            }
            else if(form_error('new_password'))
            {
              $msg = form_error('new_password');
            }
      ?>
       
        <div class="col-sm-offset-2 col-md-8 col-sm-8 col-xs-12">
          <div class="form">
            <div class="border"></div>
            <div class="border1"></div>

            <div style="color: red;">
              <?php echo @$msg; ?>
                
              </div>
            <form class="form-horizontal password" enctype="multipart/form-data" method="post">
                <fieldset>
                  <div class="form-group">
                    <div class="col-sm-12">
                     <label for="exampleInputEmail1">Current Password</label>
                    <input type="password" name="current_password"class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                     <label for="exampleInputEmail1">New Password</label>
                    <input type="password" name="new_password"class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="exampleInputEmail1">Confirm Password</label>
                    <input type="password" name="confirm_password"class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                    </div>
                  </div>
                  <div class="button">
                    <button type="submit" value="Submit" class="btn btn-primary btnus">SAVE</button>
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