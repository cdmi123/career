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
            <h1>Add Company Branch</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Company Branch Form</li>
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
                if(form_error('branch_name'))
                {
                  $msg = form_error('branch_name');
                }
               else if(form_error('select_country'))
                {
                  $msg = form_error('select_country');
                }
                else if(form_error('select_state'))
                {
                  $msg = form_error('select_state');
                }
                else if(form_error('select_city'))
                {
                  $msg = form_error('select_city');
                }
                else if(form_error('select_location'))
                {
                  $msg = form_error('select_location');
                }
                else if(form_error('address'))
                {
                  $msg = form_error('address');
                }

              ?>
              <div style="color:red">
                <?php echo @$msg; ?>
              </div>
              <form  method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Branch Name</label>
                    <input type="text" class="form-control" name="branch_name" placeholder="Enter name" value="<?php echo @$info['branch_name']?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Country</label>
                    <select name="select_country" id="select_country" class="form-control" >
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
                      <option  value="" >Select State</option>
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
                    <label for="exampleInputEmail1">Select City</label>
                      <select name="select_city" id="select_city" class="form-control">
                      <option  value="" >Select City</option>
                      <?php 
                        foreach ($city as $value)
                        {
                        ?>

                            <option value="<?php echo $value['city_id'] ?>" <?php if(@$info['city_id']==$value['city_id']) { echo "selected"; } ?>><?php echo $value['city_name'] ?> </option>
                      <?php 
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Location</label>
                    <select name="select_location" id="select_location" class="form-control">
                      <option  value="" >Select Location</option>
                      <?php 
                        foreach ($location as $value)
                        {
                        ?>

                            <option value="<?php echo $value['location_id'] ?>" <?php if(@$info['location_id']==$value['location_id']) { echo "selected"; } ?>><?php echo $value['location_name'] ?> </option>
                      <?php 
                        }
                      ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Branch Address</label>
                    <textarea rows="5" cols="10" class="form-control" name="address" placeholder="Enter Address"><?php echo @$info['address'];?></textarea>
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

<script type="text/javascript">
    $(document).ready(function(){
      $('#select_country').change(function(){
        var country_id = $(this).val();
        console.log(country_id);
        $.ajax({
          type:"post",
          url:"<?php echo site_url('company/company_branch/get_ajax_countrys');?>",
          data:{"country_id":country_id},
          success:function(response){
            //console.log(response)
            $('#select_state').html(response);
          }
        })
      })
    })

    $(document).ready(function(){
      $('#select_state').change(function(){
        var state_id = $(this).val();
        console.log(state_id);
        $.ajax({
          type:"post",
          url:"<?php echo site_url('company/company_branch/get_ajax_states');?>",
          data:{"state_id":state_id},
          success:function(response){
            //console.log(response)
            $('#select_city').html(response);
          }
        })
      })
    })
     $(document).ready(function(){
      $('#select_city').change(function(){
        var city_id = $(this).val();
        console.log(city_id);
        $.ajax({
          type:"post",
          url:"<?php echo site_url('company/company_branch/get_ajax_cities');?>",
          data:{"city_id":city_id},
          success:function(response){
            //console.log(response)
            $('#select_location').html(response);
          }
        })
      })
    })
  </script>