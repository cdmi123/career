<?php
  
  $this->load->view('company/header');

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Testimonial</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Testimonial Form</li>
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
                
               if(form_error('select_company'))
                {
                  $msg = form_error('select_company');
                }
                else if(form_error('review'))
                {
                  $msg = form_error('review');
                }
              ?>
              <div style="color:red">
                <?php echo @$msg; ?>
              </div>
              <form  method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Company</label>
                    <select name="select_company" id="select_company" class="form-control" >
                      <option value="">Select Company</option>
                      <?php 
                        foreach ($company as $value)
                        {
                        ?>

                            <option value="<?php echo $value['company_id'] ?>" <?php if(@$info['company_id']==$value['company_id']) { echo "selected"; } ?>><?php echo $value['company_name'] ?> </option>
                      <?php 
                        }
                      ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">File input</label>
                    <input type="file" class="form-control" name="image" placeholder="enter image" value="<?php echo $info['image']?>">
                  </div>
                  <div>
                    <img width="100px" src="<?php echo base_url('uploads/company/'.$info['image']) ?>">
                  </div>
                   
                  <div class="form-group">
                      <label for="exampleInputEmail1">Review</label>
                        <div class="mb-3">
                          <textarea class="textarea" name="review" placeholder="Place some review here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $info['review'];?></textarea>
                        </div>
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
  
  $this->load->view('company/footer');

?>

