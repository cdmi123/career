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
            <h1>Add Job Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">JobPost Form</li>
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
                if(form_error('job_title'))
                {
                  $msg = form_error('job_title');
                }
                else if(form_error('select_location'))
                {
                  $msg = form_error('select_location');
                }
                else if(form_error('select_branch'))
                {
                  $msg = form_error('select_branch');
                }
                else if(form_error('select_post'))
                {
                  $msg = form_error('select_post');
                }
                else if(form_error('select_category'))
               {
                  $msg = form_error('select_category');
                }
                else if(form_error('num_vacancy'))
                {
                  $msg = form_error('num_vacancy');
                }
               else if(form_error('start_date'))
                {
                  $msg = form_error('start_date');
                }
                else if(form_error('end_date'))
                {
                  $msg = form_error('end_date');
                }
                else if(form_error('exper_req'))
                {
                  $msg = form_error('exper_req');
                }
                else if(form_error('select_skill'))
                {
                  $msg = form_error('select_skill');
                }
                else if(form_error('basic_req'))
                {
                  $msg = form_error('basic_req');
                }
                else if(form_error('salary_given'))
                {
                  $msg = form_error('salary_given');
                }
                else if(form_error('status'))
                {
                  $msg = form_error('status');
                }
                else if(form_error('select_education'))
                {
                  $msg = form_error('select_education');
                }
              ?>
              <div style="color:red">
                <?php echo @$msg; ?>
              </div>

              <form  method="post" enctype="multipart/form-data">
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Job Title</label>
                    <input type="text" class="form-control" name="job_title" placeholder="Enter Job Title" value="<?php echo $info['job_title']?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">File input</label>
                    <input type="file" class="form-control" name="image" placeholder="enter image" value="<?php echo $info['image']?>">
                  </div>
                  <div>
                    <img  src="<?php echo base_url('uploads/company/'.$info['image']) ?>" width="100px">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Select Location</label>
                    <select name="select_location" id="select_location" class="form-control">
                      <option value="">Select Location</option>
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
                  <label for="exampleInputEmail1">Select Branch</label>
                    <select name="select_branch"  class="form-control">
                      <option value="">Select Branch</option>
                      <?php 
                        foreach ($company_branch as $value)
                        {
                        ?>

                            <option value="<?php echo $value['branch_id'] ?>" <?php if(@$info['branch_id']==$value['branch_id']) { echo "selected"; } ?>><?php echo $value['branch_name'] ?> </option>
                      <?php 
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Post</label>
                      <select name="select_post"  class="form-control">
                      <option value="">Select Post</option>
                      <?php 
                        foreach ($post as $value)
                        {
                        ?>

                            <option value="<?php echo $value['post_id'] ?>" <?php if(@$info['post_id']==$value['post_id']) { echo "selected"; } ?>><?php echo $value['post_name'] ?> </option>
                      <?php 
                        }
                      ?>
                    </select>
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
                   <div class="form-group">
                    <label for="exampleInputEmail1">Number Of Vacancy</label>
                    <input type="text" class="form-control" name="num_vacancy" placeholder="Enter Num Of Vacancy" value="<?php echo $info['num_vacancy']?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Starting Date</label>
                    <input type="date" class="form-control" name="start_date" placeholder="Enter Starting Date" value="<?php echo $info['start_date']?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Ending Date</label>
                    <input type="date" class="form-control" name="end_date" placeholder="Enter Ending Date" value="<?php echo $info['end_date']?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Experience Requirement</label>
                    <select name="exper_req"  class="form-control">
                      <option value="">---select Requirement---</option>
                      
                      <option value="0-6 Months" <?php if($info['exper_req']=='0-6 Months') { echo "selected"; } ?>>0-6 Months</option>
                      <option value="1 Year" <?php if($info['exper_req']=='1 Year') { echo "selected"; } ?>>1 Year</option>
                      <option value="2 Year" <?php if($info['exper_req']=='2 Year') { echo "selected"; } ?>>2 Year</option>
                      <option value="3 Year" <?php if($info['exper_req']=='3 Year') { echo "selected"; } ?>>3 Year</option>
                      <option value=">5 Year" <?php if($info['exper_req']=='>5 Year') { echo "selected"; } ?>> >5 Year</option>
                    
                    </select>
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
                 
                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Basic Requirement</label>
                    <textarea rows="5" cols="10" class="form-control" name="basic_req" placeholder="Enter Basic Reuirement"><?php //echo $info[//'basic_req'];?></textarea>
                  </div> -->

          <div class="form-group">
              <label for="exampleInputEmail1">Basic Requirement</label>

              <div class="mb-3">
                <textarea class="textarea" name="basic_req" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $info['basic_req'];?></textarea>
              </div>
              
            </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Salary Given</label>
                    <input type="text" class="form-control" name="salary_given" placeholder="Enter Salary Given" value="<?php echo $info['salary_given']?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">JobPost Status</label>
                    <select name="jobpost_status" class="form-control">
                      <option value="">---select status---</option>
                      
                      <option value="0" <?php if($info['status']=='0') { echo "selected"; } ?>>Active</option>
                      <option value="1" <?php if($info['status']=='1') { echo "selected"; } ?>>Diactive</option>
                    
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
      $('#select_city').change(function(){
        var city_id = $(this).val();
        console.log(city_id);
        $.ajax({
          type:"post",
          url:"<?php echo site_url('company/job_post/get_ajax_cities');?>",
          data:{"city_id":city_id},
          success:function(response){
            //console.log(response)
            $('#select_location').html(response);
          }
        })
      })
    })
  </script>