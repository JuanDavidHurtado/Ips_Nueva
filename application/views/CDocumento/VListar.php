<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Buscar Documentos por Rango de Fecha</h3>
        </div>
        <!-- /.box-header -->

        <?php echo form_open_multipart('CDocumento/rangoFecha'); ?>
        <div class="box-body" enctype="multipart/form-data">

          <?php if ($this->session->userdata('rol_user') == 2): ?>

          <div class="col-md-4" hidden="">
            <div class="form-group">
              <label>Empresa:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-building"></i>
                </div>
                <?php foreach ($empresa as $e) { ?> 
                <input readonly="" class="form-control" type="text" name="empresa" value="<?= $e->idEmpresa ?>">               
                <?php
              }
                ?> 
              </div>
            </div>

          </div>
            
          <?php else: ?>

          <div class="col-md-4">
            <div class="form-group">
              <label>Empresa:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-building"></i>
                </div>
                 <select class="form-control" name="empresa" required="">
                                <option value="">---Seleccione Opción---</option>
                                <?php
                                foreach ($emp as $e) {
                                    echo "<option value={$e->idEmpresa}>{$e->empNombre}</option>";
                                }
                                ?> 
              </select>
              </div>
            </div>

          </div>
            
          <?php endif ?>

           <div class="col-md-4">
            <div class="form-group">
              <label>Desde:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="date" name="fecha" class="form-control" required="">
              </div>
            </div>

          </div>
           <div class="col-md-4">
            <div class="form-group">
              <label>Hasta:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="date" name="fecha1" class="form-control" required="">
              </div>
            </div>

          </div>

        </div>
        <div class="box-footer">
          <button type="submit" name="submit" class="btn btn-block btn-social btn-instagram" >
          <i class="fa fa-search"></i> Buscar</button>
        </div>
      </div>
      <!-- /.box -->


    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

  <!-- /.row -->
</section>

</div>

