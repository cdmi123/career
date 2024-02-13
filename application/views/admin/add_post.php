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
            <h1>Add Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Post Form</li>
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
            <!-- general form elements -->

              <!-- /.card-header -->
              <!-- form start -->
                <?php
                if(form_error('post_name'))
                {
                  $msg = form_error('post_name');
                }
                else if(form_error('select_category'))
               {
                  $msg = form_error('select_category');
                }
              ?>
              <div style="color:red">
                <?php echo @$msg; ?>
              </div>
              <form  method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Name</label>
                    <input type="text" class="form-control" name="post_name" placeholder="Enter name" value="<?php echo $info['post_name']?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Category</label>
                    <select name="select_category"  class="form-control" >
                      <option value="" >Select Category</option>
                      <?php 
                        foreach ($category as $value)
                        {
                        ?>

                            <option value="<?php echo $value['category_id'] ?>" <?php if(@$info['category_id']==$value['category_id']) { echo "selected"; } ?>><?php echo $value['category_name'] ?> </option>
                      <?php 
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

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