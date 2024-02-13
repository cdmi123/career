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
            <h1>CompanyTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('company/dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">CompanyTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    
    <section class="content">
      <div class="row">
        <div class="col-12">
          
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <tdead>
                </tdead>
                <tbody>
              <!--  <?php 
                   // foreach ($info as  $info) {
                 ?> --> 
                    <tr>
                      <td><b>Id</b></td>
                      <td><?php echo $info['company_id'] ?></td>
                    </tr>
                    <tr>
                       <td><b>Company Name</b></td>
                      <td><?php echo $info['company_name'] ?></td>
                    </tr>
                    <tr>
                      <td><b>Contact</b></td>
                      <td><?php echo $info['contact'] ?></td>
                    </tr>
                    <tr>
                      <td><b>Contact Person</b></td>
                      <td><?php echo $info['contact_person'] ?></td>
                    </tr>
                    <tr>
                      <td><b>Image</b></td>
                      <td><img  height="100" widtd="100" src="<?php echo base_url("./uploads/company/".$info['image']);?>"></td>
                    </tr>
                    <tr>
                      <td><b>Email</b></td>
                      <td><?php echo $info['email'] ?></td>
                    </tr>
                    <tr>
                      <td><b>Country Name</b></td>
                      <td><?php echo $info['country_name'] ?></td>
                    </tr>
                    <tr>
                      <td><b>State Name</b></td>
                      <td><?php echo $info['state_name'] ?></td>
                    </tr>
                    <tr>
                      <td><b>City Name</b></td>
                      <td><?php echo $info['city_name'] ?></td>
                    </tr>
                    <tr>
                      <td><b>Location Name</b></td>
                      <td><?php echo $info['location_name'] ?></td>
                    </tr>
                    <tr>
                      <td><b>Address</b></td>
                      <td><?php echo $info['address'] ?></td>
                    </tr>
                    <tr> 
                      <td><b>Company Details</b></td>
                      <td><?php echo $info['company_details'] ?></td>
                    </tr>
                    <tr>
                      <td><b>Company Status</b></td>
                      <td><?php echo $info['company_status'] ?></td> 
                    </tr>
                    <tr> 
                      <td><b>Action</b></td>
                      <td>
                      <a href="<?php echo site_url('company/company/add_company/'.$info['company_id']);?>"><i class="fa fa-edit" style="font-size:36px;color:blue"></i></a>
                      </td>
                   </tr> 
                    <tr>
                      <td><b>Action</b></td>
                      <td><a href="<?php echo site_url('company/company/delete_data/'.$info['company_id']);?>"><i class="fas fa-trash-alt" style="font-size:36px;color:red"></i></a> </td> 
                    </tr>
                  <!--  <?php //} ?> -->
                  </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

         <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<?php

  $this->load->view('company/footer');

?>

<script>
  $(function () {
  //  $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "ordering": true,
      "info": true,
      "autoWidtd": false,
    });
  });
</script>