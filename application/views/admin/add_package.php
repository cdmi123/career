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
            <h1>Add location</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">location Form</li>
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
               
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
                 if(form_error('pkg_name'))
                {
                  $msg = form_error('pkg_name');
                }
                else if(form_error('pkg_rate'))
                {
                  $msg = form_error('pkg_rate');
                }

              ?>
              <div style="color:red">
                <?php echo @$msg; ?>
              </div>
              <form  method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Package Name</label>
                    <input type="text" class="form-control" name="pkg_name" placeholder="Enter Package name" value="<?php echo $info['pkg_name']?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Package Rate</label>
                    <input type="text" class="form-control" name="pkg_rate" placeholder="Enter rate name" value="<?php echo $info['pkg_rate']?>">
                  </div>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="submit" value="submit">
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
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
