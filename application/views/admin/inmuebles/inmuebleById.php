<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <h1>
        Detalles del inmueble
    </h1>
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="pd-img">
                            <?php if (!empty($imagenes)): ?>
                                <img class="img-card-pd" src="<?= base_url('assets/images/uploads/' . $imagenes[0]->nombre) ?>" alt="Imagen">
                                <div class="image-container">
                                    <?php foreach ($imagenes as $imagen): ?>
                                        <div class="img-containerPd" style="display: inline-block; border: 2px solid; margin-left: 0%; margin-right: 5px;">
                                            <img style="width: 100%; height: 4.5rem;" src="<?= base_url('assets/images/uploads/' . $imagen->nombre) ?>" alt="Imagen">
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                    <?php if (!empty($inmuebles)): ?>
                                        <h2><?php echo $inmuebles->titulo; ?></h2>
                                        <p><strong>Descripción:</strong> <?php echo $inmuebles->descripcion; ?></p>
                                        <p><strong>Precio:</strong> $<?php echo $inmuebles->precio; ?></p>
                                        <p><strong>Ubicacion:</strong> <?php echo $inmuebles->ubicacion; ?></p>
                                        <p><strong>Parrilla:</strong> <?php echo $inmuebles->parrilla ? 'Sí' : 'No'; ?></p>
                                        <p><strong>Pileta:</strong> <?php echo $inmuebles->pileta ? 'Sí' : 'No'; ?></p>
                                        <p><strong>Celular Propietario:</strong> <?php echo $inmuebles->celularUser;?></p>
                                    <?php else: ?>
                                        <p>No se encontraron datos para el inmueble.</p>
                                    <?php endif; ?>
                                <div class="comments-container">
                                    <h3>Comentarios</h3>
                            <form action="<?php echo base_url('mantenimiento/comentarios/guardarComentario/'. $inmuebles->id)?>" method="post">
                                <textarea id="contenido" name="contenido" class="form-control" rows="5" style="height:100px;" required></textarea><br>
                                <input type="submit" value="Comentar" class="btn btn-primary">
                            </form>
                            <ul style="list-style-type: none;">
                                <?php foreach ($comentarios as $comentario):?>
                                    <li style="display: flex; align-items: center;">
                                        <i class="bi bi-person-circle" style="font-size:25px;"></i>
                                        <div class="comment-box">
                                            <form id="miFormulario" method="post" action="<?php echo base_url('mantenimiento/comentarios/eliminarComentario/')?>">
                                                <div class="comment-head">
                                                    <strong><?php echo $comentario->nombreUsuario; ?></strong>
                                                    <button type="submit"><i class="bi bi-trash"></i></button>
                                                </div>
                                                <div class="comment-content">
                                                    <?php echo $comentario->contenido; ?>                             
                                                        <input type="hidden" name="comentario_id" value="<?php echo $comentario->id; ?>">
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->

<!-- /.content-wrapper -->
