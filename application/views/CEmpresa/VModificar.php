 <section class="content">

  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Actualizar Empresa</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>

    <?php echo form_open_multipart('CEmpresa/Editar'); ?>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <?php foreach ($empresa as $e) { ?>
          <input id='id' name='id' value='<?= $e->idEmpresa ?>' hidden=''/>
          <div class="col-md-6">
            <div class="form-group">
              <label>Nombres:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <input type="text" name="nom" value="<?= $e->empNombre; ?>" class="form-control"/>
              </div>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Correo Eléctronico</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <input type="text" value="<?= $e->empCorreo; ?>" name="cor" class="form-control" >
              </div>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="form-group">
              <label>Nit:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <input type="text" name="nit" class="form-control" value="<?= $e->empNit; ?>">
              </div>

            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Teléfono:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <input type="text" name="tel" class="form-control" value="<?= $e->empTelefono; ?>">
              </div>
            </div>
            <!-- /.form-group -->
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Estado:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <select class="form-control" name="est">
                  <?php if ($e->empEstado == "Activo"){ ?>

                    <option value="<?= $e->empEstado; ?>"><?= $e->empEstado; ?></option>
                    <option value="Inactivo">Inactivo</option>

                  <?php }else{ ?>

                    <option value="<?= $e->empEstado; ?>">Inactivo</option>
                    <option value="Activo">Activo</option>

                  <?php } ?>
                  </select>
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



