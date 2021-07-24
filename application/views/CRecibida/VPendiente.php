<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Documentaciòn Pendiente de Revisiòn</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <div id="tabla-info"class="table-responsive">
            <table id="example1" name="example1" class="table table-bordered">
              <thead>
                <th>Entidad</th>
                <th>Validador</th>
                <th>Factura</th>
                <th>Fecha Validaciòn</th>
                <th>Fecha Periodo</th>
                <th>Valor</th>
                <th colspan="2">Opción</th>
              </thead>
              <tbody>
                <?php
                foreach ($doc as $d) {
                  ?>
                  <tr>
                    <td>
                      <?= $d->empNombre; ?>
                    </td>
                    <td>
                      <?= $d->usuNombre." ".$d->usuApellido; ?>
                    </td>
                    <td>
                      <?= $d->usu_doc_Factura; ?>
                    </td>
                    <td>
                     <?= $d->usu_doc_Fecha; ?>
                    </td>
                    <td>
                      <?= $d->usu_doc_Fec_Periodo; ?>
                    </td>
                    <td>
                      $ <?= $d->usu_doc_Valor; ?>
                    </td>
                    <td>
                      <a data-toggle="tooltip" title="Aceptar Documentaciòn" href="<?= base_url("index.php/CRecibida/aceptar_doc/$d->usuDoc") ?>" class="btn btn-social btn-instagram"><i class="fa fa-check"></i> Aceptar</a>
                    </td>
                    <td>
                      <a data-toggle="tooltip" title="Rechazar Documentaciòn" href="<?= base_url("index.php/CRecibida/rechazar_doc/$d->usuDoc") ?>" class="btn btn-social btn-google"><i class="fa fa-times-circle"></i> Rechazar</a>
                    </td>
                     </tr>
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
