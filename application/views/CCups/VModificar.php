 <section class="content">

  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Actualizar Cups</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>

    <?php echo form_open_multipart('CCups/Editar'); ?>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <?php foreach ($cups as $c) { ?>
          <input id='id' name='id' value='<?= $c->idCups ?>' hidden=''/>
          <div class="col-md-4">
            <div class="form-group">
              <label>Codigo:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <input type="text" name="cod" value="<?= $c->cupCodigo; ?>" class="form-control"/>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <div class="form-group">
              <label>Empresa:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <select class="form-control" required="" name="emp">
                  <?php
                  foreach ($empresa as $e) {
                    if ($c->empresa_idEmpresa == $e->idEmpresa) {
                      echo "<option selected='selected' value={$e->idEmpresa}>{$e->empNombre}</option>";
                    } else {
                      echo "<option value={$e->idEmpresa}>{$e->empNombre}</option>";
                    }
                  }
                  ?>
                </select>
              </div>

            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>Estado:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <select class="form-control" name="est">
                  <?php if ($c->cupEstado == "Activo"){ ?>

                    <option value="<?= $c->cupEstado; ?>"><?= $c->cupEstado; ?></option>
                    <option value="Inactivo">Inactivo</option>

                  <?php }else{ ?>

                    <option value="<?= $c->cupEstado; ?>"><?= $c->cupEstado; ?></option>
                    <option value="Activo">Activo</option>

                  <?php } ?>
                </select>
              </div>

            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Descripcion:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <textarea value="<?= $c->cupDescripcion; ?>"  class="form-control" name="des" rows="5" cols="50"><?= $c->cupDescripcion; ?></textarea>
              </div>

            </div>
          </div>

         

          <div class="col-md-12">

            <button type="submit" name="submit" value="Agregar" class="btn btn-block btn-social btn-bitbucket" >

              <i class="fa fa-bitbucket"></i> Actualizar
            </button>

          </div>

        <?php } ?>

        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
      the plugin.
    </div>
  </div>
</section>

</div>



