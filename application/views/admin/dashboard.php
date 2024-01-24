
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color:Light;">
            <!-- Content Header (Page header) -->
            <section class="content-header" >
                <h1 style = "color : Black;">
                Inmuebles
                <small style = "color : Black;">Listado </small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
            <?php if(!empty($inmuebles)):?>
                <?php foreach($inmuebles as $inmueble):?>
            <div class="card" style="width: 18rem;
             margin-top: 20px;margin-left: 30px;
              border:none; padding: 10px; background-color:#fff;
              display:inline-block;">
            <img class="card-img-top" style="width:100%; height:10rem;"src="<?php echo base_url('assets/images/uploads/' . $inmueble->nombre_imagen_portada); ?>" alt="Card image cap">
                <div class="card-body" style="width:100%">
                <h5 class="card-title" style="text-align:center"><?php echo $inmueble->titulo;?></h5>
                <p class="card-text" style="text-align:center;"><?php echo $inmueble->descripcion;?></p>
                <a href="<?php echo base_url('mantenimiento/inmueble/inmuebleById/'. $inmueble->id);?>" style="width:100%" class="btn btn-primary">Ver mas</a>
            </div>
            </div>
            <?php endforeach;?>
            <?php endif;?>
            </section>
            <!-- /.content -->
      
        <!-- /.content-wrapper -->
        