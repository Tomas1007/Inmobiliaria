<div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
     
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
         
          
          <li class="nav-item nav-category">Inicio</li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>dashboard" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Inicio</span>
              <i class="menu-arrow"></i>
            </a>
          
          </li>
          <li class="nav-item nav-category">Mis inmuebles</li>
      
          <li class="nav-item">
            <a class="nav-link"  href="<?php echo base_url();?>mantenimiento/inmueble" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Inmuebles</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item nav-category">Mis datos</li>

          <li class="nav-item">
            <a class="nav-link"  href="<?php echo base_url();?>usuario/Usuarios" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Usuario</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">help</li>
          <li class="nav-item">
            <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Documentation</span>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>auth/logout"> Cerrar Sesion </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>