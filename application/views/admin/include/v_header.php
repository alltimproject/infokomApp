<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>INFOKOM | </title>

    <!-- Bootstrap -->
    <link href="<?= base_url().'assets/vendors/bootstrap/dist/css/bootstrap.min.css' ?> " rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url().'assets/vendors/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url().'assets/vendors/nprogress/nprogress.css' ?> " rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url().'assets/vendors/iCheck/skins/flat/green.css' ?> " rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?= base_url().'assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css' ?> " rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= base_url().'assets/vendors/jqvmap/dist/jqvmap.min.css' ?> " rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url().'assets/vendors/bootstrap-daterangepicker/daterangepicker.css' ?> " rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url().'assets/build/css/custom.min.css' ?> " rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body" >
      <div class="main_container" style="background-color:rgb(48, 135, 198, 0.4);" >
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view" style="background-color:rgb(48, 135, 198, 0.4);" >
            <div class="navbar nav_title" style="border: 0; background-color:rgb(48, 135, 198, 0.4);">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>ADMIN</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?= $this->session->userdata('useractive')  ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Dashboard</h3>

                <ul class="nav side-menu">
                  <li><a href="<?= base_url('admin/home') ?>"><i class="fa fa-home"></i> Home
                  <li><a href="<?= base_url('admin/gaji') ?>"><i class="fa fa-home"></i> Data Gaji</a></li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>DATA</h3>

                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Kelola Karyawan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/Karyawan') ?> ">Data Karyawan</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Kelola Divisi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/divisi') ?>">Data Divisi</a></li>
                      <li><a href="<?= base_url('admin/divisi/gajidivisi') ?> ">Setting Gaji Divisi</a></li>
                    </ul>
                  </li>
                  <li><a href="<?= base_url('admin/user') ?> "><i class="fa fa-laptop"></i> Kelola User<span class="label label-success pull-right"></span></a></li>
                  <li><a href="<?= base_url('admin/laporan') ?> "><i class="fa fa-laptop"></i> Kelola Laporan<span class="label label-success pull-right"></span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->


          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu" style="background-color:rgb(48, 135, 198, 0.9);">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?= $this->session->userdata('useractive') ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>

                    <li><a href="<?= base_url('login/logout') ?> "><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>


              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
