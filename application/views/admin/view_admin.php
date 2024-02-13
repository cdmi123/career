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
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">

                <thead>

                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Image</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 <?php 
                    foreach ($info as  $v) {
                  ?> 
                    <tr>
                      <td><?php echo $v['id'] ?></td>
                      <td><?php echo $v['name'] ?></td>
                      <td><?php echo $v['email'] ?></td>
                      <td><img  height="100" width="100" src="<?php echo base_url("./uploads/admin/".$v['image']);?>"></td>
                      <td> <a href="<?php echo site_url('admin/admin/add_admin/'.$v['id']);?>"><i class="fa fa-edit" style="font-size:36px;color:blue"></i></a> </td>

                      <td> <a href="<?php echo site_url('admin/admin/delete_data/'.$v['id']);?>"><i class="fas fa-trash-alt" style="font-size:36px;color:red"></i></a>
                      </td>
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