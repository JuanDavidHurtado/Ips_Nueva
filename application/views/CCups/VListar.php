<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Lista Cups</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <div id="tabla-info"class="table-responsive">
            <table id="example1" name="example1" class="table table-bordered">
              <thead>
                <th>Empresa</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Opción</th>
              </thead>
              <tbody>
                <?php
                foreach ($cups as $c) {
                  ?>
                  <tr>
                    <td>
                      <?= $c->empNombre; ?>
                    </td>
                    <td>
                      <?= $c->cupCodigo; ?>
                    </td>
                    <td>
                      <?= $c->cupDescripcion; ?>
                    </td>
                     <td>
                      <?php if ($c->cupEstado == 'Activo'):

                        echo "<p style='background:#5DB4E7;'>$c->cupEstado<p>"; 
                        
                       else:

                        echo "<p style='background:#E8354E;'>$c->cupEstado<p>"; 
                        
                       endif ?>
                     
                    </td>
                    <td>
                       <a data-toggle="tooltip" title="Actualizar Cups" href="<?= base_url("index.php/CCups/modRecuperar/$c->idCups") ?>" class="btn btn-social btn-instagram"><i class="fa fa-edit"></i> Actualizar</a>
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
