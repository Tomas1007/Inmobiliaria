<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eventer</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- base_url() = http://localhost/ventas_ci/-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/font-awesome/css/font-awesome.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">

</head>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1>Eventer</h1>
    </div>

    <!-- Login Form -->
    <form action="<?php echo base_url();?>Register/registrar" method="post">
      <input type="text" id="nombre" class="fadeIn second" name="nombre" placeholder="Nombre">
      <input type="text" id="apellido" class="fadeIn third" name="apellido" placeholder="Apellido">
      <input type="text" id="email" class="fadeIn third" name="email" placeholder="Email">
      <input type="text" id="contrasenia" class="fadeIn third" name="contrasenia" placeholder="Contraseña">
      <input type="submit" class="fadeIn fourth" value="Registrarse">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover"  href="<?php echo base_url();?>auth/login">Ingresar</a>
    </div>

  </div>
</div>

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/template/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/template/bootstrap/js/bootstrap.min.js"></script>

</html>