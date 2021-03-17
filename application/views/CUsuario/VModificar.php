 <section class="content">

  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Actualizar Usuario</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>

    <?php echo form_open_multipart('CUsuario/Editar'); ?>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <?php foreach ($usuario as $u) { ?>
          <input id='id' name='id' value='<?= $u->idUsuario ?>' hidden=''/>
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
                <input type="text" name="Log" class="form-control" value="<?= $u->usuLogin; ?>">
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
          <div class="col-md-6">
            <div class="form-group">
              <label>Rol:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <select class="form-control" name="rol" required="">

                 <?php
                 foreach ($rol as $r) {
                  if ($u->rol_idRol == $r->idRol) {
                    echo "<option selected='selected' value={$r->idRol}>{$r->rolNombre}</option>";
                  } else {
                    echo "<option value={$r->idRol}>{$r->rolNombre}</option>";
                  }
                }
                ?>
              </select>
            </div>

          </div>
          <!-- /.form-group -->
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label>Estado:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-laptop"></i>
              </div>
              <select class="form-control" required="" name="est">
                <?php
                foreach ($estado as $e) {
                  if ($u->estado_idEstado == $e->idEstado) {
                    echo "<option selected='selected' value={$e->idEstado}>{$e->estNombre}</option>";
                  } else {
                    echo "<option value={$e->idEstado}>{$e->estNombre}</option>";
                  }
                }
                ?>
              </select>
            </div>

          </div>
          <!-- /.form-group -->
        </div>
        <?php if ($u->empresa_idEmpresa != NULL): ?>
          
        <div class="col-md-12">
            <div class="form-group">
              <label>Empresa:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-laptop"></i>
                </div>
                <select class="form-control" name="emp">

                 <?php
                 foreach ($empresa as $emp) {
                  if ($u->empresa_idEmpresa == $emp->idEmpresa) {
                    echo "<option selected='selected' value={$emp->idEmpresa}>{$emp->empNombre}</option>";
                  } else {
                    echo "<option value={$emp->idEmpresa}>{$emp->empNombre}</option>";
                  }
                }
                ?>
              </select>
            </div>

          </div>
          <!-- /.form-group -->
        </div>
        <?php endif ?>

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



