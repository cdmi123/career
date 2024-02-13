<?php

    $this->load->view('admin/header');

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Change Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Change Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
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
              <div style="color: red"><?php echo @$msg; ?></div>
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <label for="exampleInputEmail1">Current Password</label>
                    <input type="password" name="current_password"class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                </div>
                <div class="card-body">
                  <label for="exampleInputEmail1">New Password</label>
                    <input type="password" name="new_password"class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                </div>
                <div class="card-body">
                  <label for="exampleInputEmail1">Confirm Password</label>
                    <input type="password" name="confirm_password"class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->

          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php 

    $this->load->view('admin/footer');

  ?>