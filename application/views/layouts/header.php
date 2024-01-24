<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Eventer</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <script src="<?php echo base_url();?>assets/js/eventos.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
  
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"><?php echo $this->session->userdata("nombre")?></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.html">
            <h3>Eventer</h3>
          </a>
            
        </div>
      </div>
      <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link" href="#">Nosotros</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" 
     href="<?php echo base_url(); ?>auth/logout">
     <i class="menu-icon mdi mdi-account-circle-outline"></i>
     <span>Cerrar Sesión</span>
    </a>
  </li>
</ul>
    </nav>
</div>

