 <section class="content">

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Actualizar Mis Datos</h3>
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
                  <i class="fa fa-user"></i>
                </div>
                <input type="text" name="nom" value="<?= $u->usuNombre; ?>" class="form-control"/>
              </div>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Teléfono</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-fax"></i>
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
                  <i class="fa fa-user"></i>
                </div>
                <input type="text" name="ape" class="form-control" value="<?= $u->usuApellido; ?>">
              </div>

            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Teléfono Fijo:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-fax"></i>
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
                  <i class="fa fa-envelope"></i>
                </div>
                <input type="email" name="cor" class="form-control" value="<?= $u->usuCorreo; ?>">
              </div>

            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label>Login:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-user"></i>
                </div>
                <input type="text" name="log" class="form-control" value="<?= $u->usuLogin; ?>">
              </div>
            </div>
            <!-- /.form-group -->
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Dirección:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa  fa-dot-circle-o"></i>
                </div>
                <input type="text" value="<?= $u->usuDireccion; ?>" name="dir" class="form-control">
              </div>

            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Contraseña:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-unlock-alt"></i>
                </div>
                <input type="text" value="<?= $u->usuClave; ?>" name="pwd" class="form-control">
              </div>
            </div>
            <!-- /.form-group -->
          </div>

      <?php } ?>

      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
   <button type="submit" name="submit" class="btn btn-block btn-social btn-bitbucket" ><i class="fa fa-check"></i> Actualizar</button>
  </div>
</div>
</section>

</div>




