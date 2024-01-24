
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Usuario
        <small>Editar</small>
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
                            <?php foreach($user as $users):?>
                                <form action="<?php echo base_url();?>usuario/usuarios/update" method="POST">
                                <input type="hidden" value="<?php echo $users->id;?>" name="id">
                            <div class="form-group ">
                                <label for="titulo">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $users->nombre;?>">
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $users->apellido;?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?php echo $users->email;?>">
                            </div>
                            <div class="form-group">
                                <label for="celular">Celular:</label>
                                <input type="tel" max="12" class="form-control" id="celular" name="celular" value="<?php echo $users->celular;?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
                            <?php endforeach;?>

                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
<!-- /.content-wrapper -->
