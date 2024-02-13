<?php
  
  $this->load->view('company/header');

 $company_id = $this->session->userdata('company_id');
 $this->db->where('company_id',$company_id);
 $arr = $this->db->get('company')->row_array();



?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Buy Package</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Package Form</li>
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
                if(form_error('select_package'))
                {
                  $msg = form_error('select_package');
                }
                else if(form_error('select_rate'))
                {
                  $msg = form_error('select_rate');
                }
              ?>
              <div style="color:red">
                <?php echo @$msg; ?>
              </div>

              <?php
                if($arr['payment_status'] == 0)
                {
              ?>

              <form  method="post" enctype="multipart/form-data" action="<?php echo site_url('company/Welcome/index') ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Package</label>
                      <select name="select_package" id="select_package" class="form-control">
                      <option value="">Select Package</option>
                      <?php 
                        foreach ($package as $value)
                        {
                        ?>
 
                            <option value="<?php echo $value['id'] ?>" <?php if(@$info['pkg_name']==$value['pkg_name']) { echo "selected"; } ?>><?php echo $value['pkg_name'] ?> </option>
                      <?php 
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Rate</label>
                    
                      <input type="text" id="select_rate" name="amount" readonly="" class="form-control">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="submit" value="Buy Package">
                </div>
              </form>

            <?php 
                } 
                else
                {
                     $this->db->where('company_id',$company_id);
                     $payment_data = $this->db->get('payment')->row_array();

                ?>

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Payment Done !</label>
                  </div>


                  <table id="example2" class="table table-bordered table-hover">
                      <tr>
                          <th>Amount</th>
                          <td><?php echo $payment_data['amount'] ?></td>
                      </tr>
                       <tr>
                          <th>Transaction Id</th>
                          <td><?php echo $payment_data['txnid'] ?></td>
                      </tr>
                      <tr>
                          <th>Payment Date</th>
                          <td><?php echo $payment_data['addedon'] ?></td>
                      </tr>
                  </table>
                </div>

            <?php } ?>
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
     
      $('#select_package').change(function(){
        
        var pkg_name = $(this).val();
        //alert(pkg_name);
        $.ajax({
          type:"post",
          url:"<?php echo site_url('company/buy_package/get_ajax_package');?>",
          data:{"pkg_name":pkg_name},
          success:function(response){
            //alert(response);
            $('#select_rate').val(response);
          }
        })
      })
    });
  </script>

