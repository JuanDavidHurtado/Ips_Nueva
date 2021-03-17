<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Lista Usuarios</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <div id="tabla-info"class="table-responsive">
            <table id="example1" name="example1" class="table table-bordered">
              <thead>
                <th>Nombres</th>
                <th>Teléfono</th>
                <th>Teléfono (Opcional)</th>
                <th>E-mail</th>
                <th>Dirección</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Empresa</th>
                <th colspan="2">Opciones</th>
              </thead>
              <tbody>
                <?php
                foreach ($usuario as $u) {
                  ?>
                  <tr>
                    <td>
                      <?= $u->usuNombre." ".$u->usuApellido; ?>
                    </td>
                    <td>
                      <?= $u->usuTelefono; ?>
                    </td>
                    <td>
                      <?= $u->usuTelefono1; ?>
                    </td>
                    <td>
                      <?= $u->usuCorreo; ?>
                    </td>
                    <td>
                      <?= $u->usuDireccion; ?>
                    </td>
                    <td>
                      <?= $u->rolNombre; ?>
                    </td>
                    <td>
                      <?= $u->estNombre; ?>
                    </td>
                    <td>

                      <?php if ($u->empresa_idEmpresa != NULL){

                       echo $u->empNombre;

                     }else{

                      echo "No pertenece a una empresa"; 

                    }
                    ?>
                  </td>
                  <td>
                    <a class="btn btn-default" data-toggle="tooltip" title="Actualizar Usuario" href="<?= base_url("index.php/CUsuario/modRecuperar/$u->idUsuario") ?>"><span class="glyphicon glyphicon-pencil">Actualizar</span></a>
                  </td>
                  <td>
                    <a class="btn btn-default" data-toggle="tooltip" title="Eliminar Usuario" href="<?= base_url("index.php/CUsuario/eliminar/$u->idUsuario") ?>"><span class="glyphicon glyphicon-trash"> Eliminar</span></a>
                  </td>

                  <?php
                }
                ?>
              </tbody>
            </table>
          </div>

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->


    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

  <!-- /.row -->
</section>

</div>
