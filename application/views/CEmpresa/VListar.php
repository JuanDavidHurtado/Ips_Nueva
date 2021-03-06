<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Lista Entidad</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <div id="tabla-info"class="table-responsive">
            <table id="example1" name="example1" class="table table-bordered">
              <thead>
                <th>Nombres</th>
                <th>Nit</th>
                <th>E-mail</th>
                <th>Teléfono</th>
                <th>Estado</th>
                <th>Opción</th>
              </thead>
              <tbody>
                <?php
                foreach ($empresa as $e) {
                  ?>
                  <tr>
                    <td>
                      <?= $e->empNombre; ?>
                    </td>
                    <td>
                      <?= $e->empNit; ?>
                    </td>
                    <td>
                      <?= $e->empCorreo; ?>
                    </td>
                    <td>
                      <?= $e->empTelefono; ?>
                    </td>
                    <td>
                      <?php if ($e->empEstado == 'Activo'):

                        echo "<p style='background:#5DB4E7;'>$e->empEstado<p>"; 
                        
                       else:

                        echo "<p style='background:#E8354E;'>$e->empEstado<p>"; 
                        
                       endif ?>
                     
                    </td>
                     
                    <td>
                    <a data-toggle="tooltip" title="Actualizar Empresa" href="<?= base_url("index.php/CEmpresa/modRecuperar/$e->idEmpresa") ?>" class="btn btn-social btn-instagram"><i class="fa fa-edit"></i> Actualizar</a>
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
