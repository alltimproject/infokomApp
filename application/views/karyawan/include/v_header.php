<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Karyawan page | </title>


        <!-- Bootstrap -->
        <link href="<?= base_url().'assets1/vendors/bootstrap/dist/css/bootstrap.min.css' ?> " rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?= base_url().'assets1/vendors/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?= base_url().'assets1/vendors/nprogress/nprogress.css' ?> " rel="stylesheet">
        <!-- iCheck -->
        <link href="<?= base_url().'assets1/vendors/iCheck/skins/flat/green.css' ?> " rel="stylesheet">

        <!-- bootstrap-progressbar -->
        <link href="<?= base_url().'assets1/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css' ?> " rel="stylesheet">
        <!-- JQVMap -->
        <link href="<?= base_url().'assets1/vendors/jqvmap/dist/jqvmap.min.css' ?> " rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="<?= base_url().'assets1/vendors/bootstrap-daterangepicker/daterangepicker.css' ?> " rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?= base_url().'assets1/build/css/custom.min.css' ?> " rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span> KARYAWAN </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?= $this->session->userdata('fullname_karyawan')  ?></h2>
                <h2><?= $this->session->userdata('nip_karyawan')  ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>

                <ul class="nav side-menu">
                  <li><a href="javascript:void(0)"><i class="fa fa-home"></i> Home</a></li>
                </ul>
              </div>
              <div class="menu_section">

              </div>

            </div>
            <!-- /sidebar menu -->


          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?= $this->session->userdata('fullname_karyawan') ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">JABATAN : <?= $this->session->userdata('jabatan_karyawan') ?></a></li>
                    <li><a href="javascript:;">DIVISI  : <?= $this->session->userdata('divisi_karyawan') ?></a></li>

                    <li><a href="<?= base_url('login/logout') ?> "><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>


              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
