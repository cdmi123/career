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
            <h1>Add State</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">State Form</li>
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
                if(form_error('select_country'))
                {
                  $msg = form_error('select_country');
                }
                else if(form_error('state_name'))
                {
                  $msg = form_error('state_name');
                }
                else if(form_error('state_status'))
                {
                  $msg = form_error('state_status');
                }
              ?>
              <div style="color:red">
                <?php echo @$msg; ?>
              </div>

              <form  method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Country</label>
                    <select name="select_country" id="select_country" class="form-control" >
                      <option value="" >Select Country</option>
                      <?php 
                        foreach ($country as $value)
                        {
                        ?>

                            <option value="<?php echo $value['country_id'] ?>" <?php if(@$info['country_id']==$value['country_id']) { echo "selected"; } ?>><?php echo $value['country_name'] ?> </option>
                      <?php 
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">State Name</label>
                    <input type="text" class="form-control" name="state_name" placeholder="Enter state name" value="<?php echo $info['state_name']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">State Status</label>
                    <select name="state_status" value="<?php echo $info['state_status']?>" class="form-control">
                      <option value="" >---select status---</option>
                      <option value="0" <?php if($info['state_status']=='0') { echo "selected"; } ?>>Active</option>
                      <option value="1" <?php if($info['state_status']=='1') { echo "selected"; } ?>>Diactive</option>
                    </select>
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

