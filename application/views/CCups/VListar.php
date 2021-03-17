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
                <th>Código</th>
                <th>Empresa</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Opción</th>
              </thead>
              <tbody>
                <?php
                foreach ($cups as $c) {
                  ?>
                  <tr>
                    <td>
                      <?= $c->cupCodigo; ?>
                    </td>
                    <td>
                      <?= $c->empNombre; ?>
                    </td>
                    <td>
                      <?= $c->cupDescripcion; ?>
                    </td>
                    <td>
                      <?= $c->cupEstado; ?>
                    </td>
                    <td>
                      <a class="btn btn-default" data-toggle="tooltip" title="Actualizar Usuario" href="<?= base_url("index.php/CCups/modRecuperar/$c->idCups") ?>"><span class="glyphicon glyphicon-pencil">Actualizar</span></a>
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
