<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alquiler de Propiedades - Encuentra tu hogar ideal</title>

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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/user-style.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">


</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="properties">
      <h1>Propiedades Disponibles</h1>
      <ul>
        <li>
          <article>
            <figure>
              <img src="propiedad1.jpg" alt="Casa de dos plantas con jardín y piscina en las afueras de la ciudad">
              <figcaption>Casa de dos plantas con jardín y piscina</figcaption>
            </figure>
            <h2>Casa de ensueño en las afueras</h2>
            <p>Esta hermosa casa de dos plantas cuenta con cuatro habitaciones, tres baños, un amplio salón, una cocina equipada, un jardín con césped y una piscina climatizada. Se encuentra en una zona tranquila y segura, a solo 15 minutos en coche del centro de la ciudad. Ideal para familias que buscan espacio, comodidad y tranquilidad.</p>
            <button onclick="rentProperty(1)">Alquilar</button>
          </article>
        </li>
        <li>
          <article>
            <figure>
              <img src="propiedad2.jpg" alt="Apartamento de una habitación con balcón y vista al mar en la costa">
              <figcaption>Apartamento de una habitación con vista al mar</figcaption>
            </figure>
            <h2>Apartamento acogedor en la costa</h2>
            <p>Este bonito apartamento de una habitación tiene un salón con sofá cama, una cocina americana, un baño con ducha y un balcón con vista al mar. Se encuentra en un edificio con ascensor, piscina comunitaria y aparcamiento. Está situado en primera línea de playa, cerca de restaurantes, tiendas y transporte público. Ideal para parejas que quieren disfrutar del sol y el mar.</p>
            <button onclick="rentProperty(2)">Alquilar</button>
          </article>
        </li>
        <li>
          <article>
            <figure>
              <img src="propiedad3.jpg" alt="Loft de dos habitaciones con terraza y chimenea en el centro de la ciudad">
              <figcaption>Loft de dos habitaciones con terraza y chimenea</figcaption>
            </figure>
            <h2>Loft moderno en el centro</h2>
            <p>Este espectacular loft de dos habitaciones tiene un diseño vanguardista, con techos altos, paredes de ladrillo, suelos de madera y grandes ventanales. Tiene un salón con chimenea, una cocina integrada, un baño con bañera y una terraza con barbacoa. Se encuentra en un edificio histórico, con portero, gimnasio y lavandería. Está ubicado en el corazón de la ciudad, a pocos pasos de museos, teatros y bares. Ideal para personas que quieren vivir la cultura y el ambiente urbano.</p>
            <button onclick="rentProperty(3)">Alquilar</button>
          </article>
        </li>
      </ul>
    </section>
  </main>
