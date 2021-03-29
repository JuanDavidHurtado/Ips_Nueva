 <section class="content">

  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Actualizar Mis Datos</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>

    <?php echo form_open_multipart('CPerfil/actualizar'); ?>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <?php foreach ($usuario as $u) { ?>
          <div class="col-md-6">
            <div class="form-group">
              <label>Nombres:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <input type="text" name="nom" value="<?= $u->usuNombre; ?>" class="form-control"/>
              </div>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Teléfono</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <input type="text" value="<?= $u->usuTelefono; ?>" name="tel" class="form-control" >
              </div>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="form-group">
              <label>Apellidos:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <input type="text" name="ape" class="form-control" value="<?= $u->usuApellido; ?>">
              </div>

            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Teléfono Fijo:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <input type="text" name="tel1" class="form-control" value="<?= $u->usuTelefono1; ?>">
              </div>
            </div>
            <!-- /.form-group -->
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Correo Eléctronico:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <input type="email" name="cor" class="form-control" value="<?= $u->usuCorreo; ?>">
              </div>

            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label>Login:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <input type="text" name="nit" class="form-control" value="<?= $u->usuLogin; ?>">
              </div>
            </div>
            <!-- /.form-group -->
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Dirección:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <input type="text" value="<?= $u->usuDireccion; ?>" name="dir" class="form-control">
              </div>

            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Contraseña:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <input type="text" value="<?= $u->usuClave; ?>" name="pwd" class="form-control">
              </div>
            </div>
            <!-- /.form-group -->
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




