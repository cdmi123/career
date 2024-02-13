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
            <h1>JobPost Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('company/dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">JobPost Tables</li>
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
                <thead>
                <tr>
                  <th>Job Id</th>
                  <!-- <th>Company Name</th> -->
                  <th>Job Title</th>
                  <th>Image</th>
                  <th>Post Name</th>
                  <th>Category Name</th>
                  <th>Num Vacancy</th>
                  <th>Salary Given</th>
                  <th>Status</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    foreach ($info as  $v) {
                  ?>
                    <tr>
                      <td><?php echo $v['job_id'] ?></td>
                      <!-- <td><?php // echo $v['company_name'] ?></td> -->
                      <td><?php echo $v['job_title'] ?></td>
                      <td><img  height="100" width="100" src="<?php echo base_url("./uploads/company/".$v['image']);?>"></td>
                      <td><?php echo $v['post_name'] ?></td>
                      <td><?php echo $v['category_name'] ?></td>
                      <td><?php echo $v['num_vacancy'] ?></td> 
                      <td><?php echo $v['salary_given'] ?></td>
                      <td><?php echo $v['status'] ?></td>
                      <td><a href="<?php echo site_url('company/job_post/add_jobpost/'.$v['job_id']);?>"><i class="fa fa-edit" style="font-size:36px;color:blue"></i></a>
                      </td>
                      <td><a href="<?php echo site_url('company/job_post/delete_data/'.$v['job_id']);?>"><i class="fas fa-trash-alt" style="font-size:36px;color:red"></i></a> </td>
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

  $this->load->view('company/footer');

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