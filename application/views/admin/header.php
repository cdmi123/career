<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Career Ocean | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jqvmap/jqvmap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css')?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.css')?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/summernote/summernote-bs4.css')?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css')?>">


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
    <!-- Messages Dropdown Menu -->
     
            <!-- Message Start -->
           
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
         <i class="fa fa-user-circle" aria-hidden="true"></i>
          </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
          
          <?php 
            $id= $this->session->userdata('user_id');
            $this->db->where('id',$id);
            $qry = $this->db->get('admin');
            $admin_info = $qry->row_array();

          ?>
           <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <span class="float-right text-muted text-sm"><a href="<?php echo site_url('admin/Change_password/index') ?>"><center>Change password</center></a></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <span class="float-right text-muted text-sm"><a href="<?php echo site_url('admin/admin/add_admin/'.$admin_info['id']);?>"><center>Edit Profile</center></a></span>
          </a>
         <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <span class="float-right text-muted text-sm"><a href="<?php echo site_url('admin/login/logout/'.$admin_info['id']);?>"><center>Log Out</center></a></span>
          </a>
      </li>
     
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="<?php echo base_url('assets/dist/img/dp.png')?>" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Career Ocean</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php 
            $id= $this->session->userdata('user_id');
            $this->db->where('id',$id);
            $qry = $this->db->get('admin');
            $admin_info = $qry->row_array();

          ?>
          <img height="150" width="150" src="<?php echo base_url("uploads/admin/".$admin_info['image']); ?>" class="img-circle elevation-2" alt="User Image">
        </div>

        <div class="info">
          <a href="<?php echo site_url('admin/admin/add_admin/'.$admin_info['id']);?>" class="d-block"><?php echo @$admin_info['name']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo site_url('admin/dashboard')?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Admin
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/admin/add_admin')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/admin/view_admin')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Admin</p>
                </a>
              </li>
              </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Country
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/country/add_country')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Country</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/country/view_country')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Country</p>
                </a>
              </li>
              </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                State
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/state/add_state')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add State</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/state/view_state')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View State</p>
                </a>
              </li>
              </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                City
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/city/add_city')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add City</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/city/view_city')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View City</p>
                </a>
              </li>
              </ul>
           </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Location
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/location/add_location')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Location</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/location/view_location')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Location</p>
                </a>
              </li>
              </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/category/add_category')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/category/view_category')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Category</p>
                </a>
              </li>
              </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Company
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/company/add_company')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Company</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/company/view_company')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Company</p>
                </a>
              </li>
              </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Education
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/education/add_education')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Education</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/education/view_education')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Education</p>
                </a>
              </li>
              </ul>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Skill
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/skill/add_skill')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Skill</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/skill/view_skill')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Skill</p>
                </a>
              </li>
              </ul>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Post
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/post/add_post')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/post/view_post')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Post</p>
                </a>
              </li>
              </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Package
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/package/add_package')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Package</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/package/view_package')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Package</p>
                </a>
              </li>
              </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Slider
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/slider/add_slider')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Slider</p>
                </a>
              </li>
              </ul>
          </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>