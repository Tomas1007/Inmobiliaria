
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Mis datos
        
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                    <th>opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($users)):?>
                                    <?php foreach($users as $users):?>
                                        <tr>
                                            <td><?php echo $users->id;?></td>
                                            <td><?php echo $users->nombre;?></td>
                                            <td><?php echo $users->apellido;?></td>
                                            <td><?php echo $users->email;?></td>
                                            <?php $datausuarios = $users->id."".$users->email."".$users->nombre."".$users->apellido;?>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo base_url()?>usuario/usuarios/edit/<?php echo $users->id;?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="<?php echo base_url();?>usuario/usuarios/delete/<?php echo $users->id;?>" class="btn btn-danger btn-remove"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>

                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
                                    </div>
<!-- /.content-wrapper -->
                                    </div>
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de la Categoria</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
