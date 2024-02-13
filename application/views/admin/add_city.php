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
            <h1>Add City</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">City Form</li>
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
                else if(form_error('select_state'))
                {
                  $msg = form_error('select_state');
                }
                else if(form_error('city_name'))
                {
                  $msg = form_error('city_name');
                }
                else if(form_error('city_status'))
                {
                  $msg = form_error('city_status');
                }
               
              ?>
              <div style="color:red">
                <?php echo @$msg; ?>
              </div>
              <form  method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Country</label>
                    <select name="select_country" id="select_country"  class="form-control" >
                      <option value="">Select Country</option>
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
                    <label for="exampleInputEmail1">Select State</label>
                    <select name="select_state" id="select_state" class="form-control">
                      <option value="">Select State</option>
                      <?php 
                        foreach ($state as $value)
                        {
                        ?>

                            <option value="<?php echo $value['state_id'] ?>" <?php if(@$info['state_id']==$value['state_id']) { echo "selected"; } ?>><?php echo $value['state_name'] ?> </option>
                      <?php 
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">City Name</label>
                    <input type="text" class="form-control" name="city_name" placeholder="Enter city name" value="<?php echo $info['city_name']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">City Status</label>
                    <select name="city_status" value="<?php echo $info['city_status'] ?>" class="form-control">
                      <option value="">---select status---</option>
                      
                      <option value="0" <?php if($info['city_status']=='0') { echo "selected"; } ?>>Active</option>
                      <option value="1" <?php if($info['city_status']=='1') { echo "selected"; } ?>>Diactive</option>
                    
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

<script type="text/javascript">
    $(document).ready(function(){
      $('#select_country').change(function(){
        var country_id = $(this).val();
        console.log(country_id);
        $.ajax({
          type:"post",
          url:"<?php echo site_url('admin/city/get_ajax_countrys');?>",
          data:{"country_id":country_id},
          success:function(response){
            //console.log(response)
            $('#select_state').html(response);
          }
        })
      })
    })
</script>