 <section class="content">

  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Registro Empresa</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>

    <?php echo form_open_multipart('CEmpresa/guardar_empresa'); ?>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Nombre:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-laptop"></i>
              </div>
              <input type="text" required="" name="nom" class="form-control" placeholder="Nombre">
            </div>
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Correo Eléctronico</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-laptop"></i>
              </div>
              <input type="text" required="" name="cor" class="form-control" placeholder="Correo Eléctronico">
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
              <input type="text" required="" name="nit" class="form-control" placeholder="Nit">
            </div>

          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Teléfono:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-laptop"></i>
              </div>
              <input type="text" required="" name="tel" class="form-control" placeholder="Teléfono">
            </div>
          </div>
          <!-- /.form-group -->
        </div>

       

        <div class="col-md-12">

          <button type="submit" name="submit" value="Agregar" class="btn btn-block btn-social btn-bitbucket" >
          
            <i class="fa fa-bitbucket"></i> Guardar
          </button>

        </div>

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



