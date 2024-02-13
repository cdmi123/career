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
            <h1>CompanyTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard') ?>">Home</a></li>
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
          <div class="card" style="overflow-x: auto;">
         
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Company Name</th>
                  <th>Contact</th>
                  <th>Contact Person</th>
                  <th>Image</th>
                  <th>Email</th>
                  <!-- <th>Password</th> -->
                  <th>Country Name</th>
                  <th>State Name</th>
                  <th>City Name</th>
                  <th>Location Name</th>
                  <th>Address</th>
                  <!-- <th>Company Details</th> -->
                  <th>Company status</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    foreach ($info as  $v) {
                  ?>
                    <tr>
                      <td><?php echo $v['company_id'] ?></td>
                      <td><?php echo $v['company_name'] ?></td>
                      <td><?php echo $v['contact'] ?></td>
                      <td><?php echo $v['contact_person'] ?></td>
                      <td><img  height="100" width="100" src="<?php echo base_url("./uploads/company/".$v['image']);?>"></td>
                      <td><?php echo $v['email'] ?></td>
                      <!-- <td><?php //echo $v['password'] ?></td> -->
                      <td><?php echo $v['country_name'] ?></td>
                      <td><?php echo $v['state_name'] ?></td>
                      <td><?php echo $v['city_name'] ?></td>
                      <td><?php echo $v['location_name'] ?></td>
                      <td><?php echo $v['address'] ?></td>
                      <!-- <td><?php //echo $v['company_details'] ?></td> -->
                      <td><?php echo $v['company_status'] ?></td> 
                      <td>
                        <a href="<?php echo site_url('admin/company/add_company/'.$v['company_id']);?>"><i class="fa fa-edit" style="font-size:36px;color:blue"></i></a>
                      </td>
                      <td><a href="<?php echo site_url('admin/company/delete_data/'.$v['company_id']);?>"><i class="fas fa-trash-alt" style="font-size:36px;color:red"></i></a> </td> 

                    </tr>
                  <?php } ?>
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

  $this->load->view('admin/footer');

?>

<script>
  $(function () {
  //  $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>