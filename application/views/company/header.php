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
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user-circle" aria-hidden="true"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
           <?php 
            $company_id= $this->session->userdata('company_id');
            $this->db->where('company_id',$company_id);
            $qry = $this->db->get('company');
            $company_info = $qry->row_array();

          ?>
           <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <span class="float-right text-muted text-sm"><a href="<?php echo site_url('company/Change_password/index') ?>"><center>Change password</center></a></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <span class="float-right text-muted text-sm"><a href="<?php echo site_url('company/company/add_company/'.$company_info['company_id']);?>"><center>Edit Profile</center></a></span>
          </a>
         <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <span class="float-right text-muted text-sm"><a href="<?php echo site_url('company/login/logout');?>"><center>Log Out</center></a></span>
          </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url('company/dashboard')?>" class="brand-link">
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
            $company_id= $this->session->userdata('company_id');
            $this->db->where('company_id',$company_id);
            $qry = $this->db->get('company');
            $company_info = $qry->row_array();
         //   echo '<pre>';print_r($company_info);die;

          ?>
          <img height="150" width="150" src="<?php echo base_url("uploads/company/".$company_info['image']); ?>" class="img-circle elevation-2" alt="User Image">
        </div>

        <div class="info">
          <a href="<?php echo site_url('company/company/add_company/'.$company_info['company_id']);?>" class="d-block"><?php echo @$company_info['company_name']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo site_url('company/dashboard')?>" class="nav-link active">
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
                Company
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('company/company/view_company')?>" class="nav-link">
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
                Company Branch
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('company/company_branch/add_branch')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Branch</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('company/company_branch/view_branch')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Branch</p>
                </a>
              </li>
              </ul>
          </li>

          
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                JobPost
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('company/job_post/add_jobpost')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add JobPost</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('company/job_post/view_jobpost')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View JobPost</p>
                </a>
              </li>
              </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Buy Package
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('company/buy_package/package')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Package</p>
                </a>
              </li>
              </ul>
          </li>


           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
               Testimonial
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('company/testimonial/add_testimonial')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Testimonial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('company/testimonial/view_testimonial')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Testimonial</p>
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