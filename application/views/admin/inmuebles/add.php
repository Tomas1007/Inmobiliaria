<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Inmuebles
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>mantenimiento/inmueble/store" method="POST">
                            <div class="form-group">
                                <label for="titulo">Titulo:</label>
                                <input type="text" class="form-control" id="titulo" name="titulo">
                               
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion:</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion">
                            </div>
                            <div class="form-group">
                                <label for="fecha">Fecha:</label>
                                <input type="datetime-local" class="form-control" id="fecha" name="fecha">
                               
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio:</label>
                                <input type="number" class="form-control" id="precio" name="precio">
                            </div>
                            <div class="form-group">
                                <label for="ubicacion">Ubicacion:</label>
                                <input type="text" class="form-control" id="ubicacion" name="ubicacion">
                            </div>
                            <div class="form-group">
                                 <label for="parrilla">Parrilla: </label>
                                <input type="checkbox" name="parrilla">
                            </div>
                            <div class="form-group">
                                 <label for="pileta">Pileta: </label>
                                <input type="checkbox" name="pileta">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
<!-- /.content-wrapper -->